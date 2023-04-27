<?php

namespace App\Http\Controllers;

use App\Http\Requests\PochtaRequest;
use App\Models\ContactPost;
use Illuminate\Http\Request;

class ContactPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pochta=ContactPost::query()->orderBy('created_at', 'desc')->get();
        return view('adminaka.pochta',compact('pochta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PochtaRequest $request)
    {
//        dd($request);
        $create=ContactPost::create($request->validated());
        return redirect()->back()->with('success', 'So\'rovingiz qabul qilindi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactPost  $contactPost
     * @return \Illuminate\Http\Response
     */
    public function show($id,ContactPost $contactPost)
    {
        $email=ContactPost::query()->where('id','=',$id)->get();
//        dd($email);
        $update= ContactPost::query()->where('id', '=',$id)->update(['watched' => 1]);
        return view('adminaka.content_pochta',compact(['email']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPost  $contactPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPost $contactPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPost  $contactPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPost $contactPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPost  $contactPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPost $contactPost)
    {
        //
    }
}
