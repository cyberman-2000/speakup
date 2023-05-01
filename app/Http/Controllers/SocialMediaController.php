<?php

namespace App\Http\Controllers;

use App\Models\socialMedia;
use App\Models\Teachers;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social=SocialMedia::with('teacher')->get();
        $teach=Teachers::all();
//        dd($social);
        return view('adminaka.teachers_social',compact(['social','teach']));
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
    public function store(Request $request)
    {
//        dd($request);
        $validated = $request->validate([
            'url' => 'required|unique:App\Models\SocialMedia,media_url|url| max:150',
        ]);
        $store=socialMedia::create([
            'media_name'=>$request->media_name,
            'media_url'=>$request->url,
            'teacher_id'=>$request->teacher_id,
        ]);
        return back()->with('success', 'Social Media has been created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\socialMedia  $social_media
     * @return \Illuminate\Http\Response
     */
    public function show(socialMedia $social_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\socialMedia  $social_media
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\socialMedia  $social_media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\socialMedia  $social_media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        dd($id);
    }
}
