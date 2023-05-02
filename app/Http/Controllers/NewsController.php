<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new=News::all();
        return view('adminaka.news_admin',compact('new'));
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
    public function store(NewsRequest $request)
    {
        $image = $request->file('image')->store('images/news');
        $validated=$request->validated();
        $create=News::create([
            'event_name'=>$validated['event_name'],
            'mini_title'=>$validated['mini_title'],
            'full_information'=>$validated['full_information'],
            'when'=>$validated['when'],
            'image'=>$image,
        ]);
        return back()->with('success', 'News has been created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd($id);
        $new=News::find($id)->with('teacher');
        return view('adminaka.edit_news',compact(['new','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request,$id)
    {
        $validated=$request->validated();
        if (!empty($request->file())){
            $t_i=News::find($id);
            $file_delete='storage/'.$t_i->image;
            if (file_exists($file_delete)){
                $delete_file=File::delete($file_delete);
            }
            $image = $request->file('image')->store('images/news');
            $teacher = News::where('id',$id)->update(['image'=>$image]);
        }
        $teacher = News::where('id',$id)->update([
            'event_name'=>$validated['event_name'],
            'mini_title'=>$validated['mini_title'],
            'full_information'=>$validated['full_information'],
            'when'=>$validated['when'],
        ]);
        return redirect()->route('news.index')->with('success', 'News has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t_i=News::find($id);
        $file_delete='storage/'.$t_i->image;
        if (file_exists($file_delete)){
            $delete_file=File::delete($file_delete);
        }
        $delete=News::destroy($id);
        return back()->with('success', 'News has been deleted Successfully');
    }
}
