<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses=Courses::all();
//        dd($courses);
        return view('ui.home',compact('courses'));
    }
}
