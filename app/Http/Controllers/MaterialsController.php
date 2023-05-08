<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialsRequest;
use App\Models\Materials;
use App\Http\Requests\UpdateMaterialsRequest;
//use http\Env\Response;
//use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Http\Response;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials=Materials::all();
        return view('adminaka/materials_admin',compact(['materials']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        return Response::download($path);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MaterialsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialsRequest $request)
    {
        $validated = $request->validated();
        $image = $request->file('image')->store('images/materials/');
        $file=$request->file('file')->store('materials/'.$request->category.'');
        $mime=pathinfo($file, PATHINFO_EXTENSION);
//        dd($validated['file']->getMimeType());
//        dd($mime);
        $create=Materials::create([
           'book_name'=>$validated['book_name'],
           'title'=>$validated['title'],
           'path'=>$file,
           'full_mime'=>$validated['file']->getMimeType(),
           'mime'=>$mime,
           'size'=>$validated['file']->getSize(),
           'category'=>$validated['category'],
           'image'=>$image
        ]);

        return back()->with('success', 'Book has been uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function edit(Materials $materials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialsRequest  $request
     * @param  \App\Models\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialsRequest $request, Materials $materials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materials $materials)
    {
        //
    }
//    public function download($id){
//        $material=Materials::query()->find($id);
////        dd($material);
//        $file=$material->path;
////        dd($material->full_mime);
//        $headers=array(
//            "Content_Type: $material->full_mime",
//        ) ;
//        return Storage::download("$file","$material->book_name",$headers);
//    }
}
