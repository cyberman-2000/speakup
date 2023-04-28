<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeachersRequest;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers= Teachers::all();
        return view('adminaka.teachers_admin',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeachersRequest $request)
    {
        $image = $request->file('image')->store('images/teachers');
        $validated=$request->validated();
//        dd($validated);
        $create=Teachers::create([
            'name'=>$validated['name'],
            'last_name'=>$validated['last_name'],
            'role'=>$validated['role'],
            'scoreband'=>$validated['scoreband'],
            'phone_number'=>$validated['phone_number'],
            'about'=>$validated['about'],
            'image'=>$image
        ]);
        return back()->with('success', 'Teacher has been created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show(Teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function edit(Teachers $teachers,$id)
    {
        $teacher=Teachers::query()->find($id);

        return view('adminaka.edit_teacher',compact(['teacher','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(TeachersRequest $request, Teachers $teachers,$id)
    {
        $validated=$request->validated();
        if (!empty($request->file())){
            $t_i=Teachers::find($id);
            $file_delete='storage/'.$t_i->image;
            $delete_file=File::delete($file_delete);
            $image = $request->file('image')->store('images/teachers');
            $teacher = Teachers::where('id',$id)->update(['image'=>$image]);
        }
        $teacher = Teachers::where('id',$id)->update([
            'name'=>$validated['name'],
            'last_name'=>$validated['last_name'],
            'role'=>$validated['role'],
            'scoreband'=>$validated['scoreband'],
            'phone_number'=>$validated['phone_number'],
            'about'=>$validated['about'],
        ]);
        return redirect()->route('teachers.index')->with('success', 'Teacher has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teachers $teachers,$id)
    {
//        dd($id);
        $t_i=Teachers::find($id);
        $file_delete='storage/'.$t_i->image;
        $delete_file=File::delete($file_delete);
        $delete=Teachers::destroy($id);
        return back()->with('success', 'Teacher has been deleted Successfully');
    }
}
