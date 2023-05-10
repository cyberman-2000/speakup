<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialsRequest;
use App\Models\Materials;
use App\Http\Requests\UpdateMaterialsRequest;
//use http\Env\Response;
//use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
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
    public function edit($id)
    {
        $materials= Materials::query()->find($id);
        return view('adminaka.edit_materials',compact(['materials','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MaterialsRequest  $request
     * @param  \App\Models\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function update(MaterialsRequest $request,$id)
    {
//        dd($id);
        if (!empty($request->file('image'))){
            $materail=Materials::find($id);
            $image = $request->file('image')->store('images/materials/');
            $image_del_from_storage='storage/'.$materail->image;
            $img=Materials::where('id',$id)->update(['image'=>$image]);
            if (file_exists($image_del_from_storage)){
                File::delete($image_del_from_storage);
            }
        }
        if (!empty($request->file('file'))){
            $materail=Materials::find($id);
            $file=$request->file('file')->store('materials/'.$request->category.'');
            $mime=pathinfo($file, PATHINFO_EXTENSION);
            $file_del_from_storage='storage/'.$materail->path;
            $book=Materials::where('id',$id)->update([
                'path'=>$file,
                'full_mime'=>$request['file']->getMimeType(),
                'size'=>$request['file']->getSize(),
                'mime'=>$mime,
                ]);
            if (file_exists($file_del_from_storage)){
                File::delete($file_del_from_storage);
            }
        }
        $validated = $request->validated();
        $update=Materials::query()->where('id',$id)->update([
            'book_name'=>$validated['book_name'],
            'title'=>$validated['title'],
            'category'=>$validated['category']
        ]);
        return redirect()->route('materials.index')->with('success', 'Book has been updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materail=Materials::find($id);
        $file_del_from_storage='storage/'.$materail->path;
        $image_del_from_storage='storage/'.$materail->image;
        if (file_exists($image_del_from_storage)){
            File::delete($image_del_from_storage);
        }
        if (file_exists($file_del_from_storage)){
            File::delete($file_del_from_storage);
        }
        $delete=Materials::destroy($id);
        return back()->with('success', 'Book has been deleted Successfully');

    }
}
