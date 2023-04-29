<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursesRequest;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Courses::all();
        return view('adminaka.courses_admin',compact('courses'));
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
    public function store(CoursesRequest $request)
    {
        $image = $request->file('image')->store('images/courses');
        $validated=$request->validated();
//        dd($validated);
        $create=Courses::create([
            'course_name'=>$validated['course_name'],
            'count_students'=>$validated['count_students'],
            'duration'=>$validated['duration'],
            'when'=>$validated['when'],
            'cost'=>$validated['cost'],
            'about'=>$validated['about'],
            'image'=>$image
        ]);
        return back()->with('success', 'Course has been created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses,$id)
    {
        $course=Courses::find($id);
        return view('adminaka.edit_course',compact(['course','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(CoursesRequest $request, Courses $courses,$id)
    {
        $validated=$request->validated();
        if (!empty($request->file())){
            $t_i=Courses::find($id);
            $file_delete='storage/'.$t_i->image;
            if (file_exists($file_delete)){
                $delete_file=File::delete($file_delete);
            }
            $image = $request->file('image')->store('images/courses');
            $teacher = Courses::where('id',$id)->update(['image'=>$image]);
        }
        $teacher = Courses::where('id',$id)->update([
            'course_name'=>$validated['course_name'],
            'count_students'=>$validated['count_students'],
            'duration'=>$validated['duration'],
            'when'=>$validated['when'],
            'cost'=>$validated['cost'],
            'about'=>$validated['about'],
        ]);
        return redirect()->route('courses.index')->with('success', 'Course has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses,$id)
    {
        $t_i=Courses::find($id);
        $file_delete='storage/'.$t_i->image;
        if (file_exists($file_delete)){
            $delete_file=File::delete($file_delete);
        }
        $delete=Courses::destroy($id);
        return back()->with('success', 'Course has been deleted Successfully');
    }

}
