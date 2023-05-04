<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count=0;
        $reg=Registration::query()->orderBy('created_at', 'desc')->paginate('10');
        foreach ($reg as $item){
            if ($item->watched==0){
                $count++;
            }
        }
        return view('adminaka.registration_admin',compact(['reg','count']));
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
    public function store(RegistrationRequest $request)
    {
//        dd($request->validated());
        $create=Registration::create($request->validated());
        return redirect()->back()->with('success', 'Siz muvaffaqiyatli kursga yozildingiz. Tez orada siz bilan bo\'glananishadi. Bizni tanlaganingiz uchun Rahmat!!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration,Request $request)
    {
        $data = [];
        foreach ($request->all() as $item){
            if (is_numeric($item)){
                $data[] = $item;
            }
        }
        $delete=Registration::whereIN('id',$data)->delete();
        return back()->with('success', 'Registered user/\'s has been deleted Successfully');
    }
}
