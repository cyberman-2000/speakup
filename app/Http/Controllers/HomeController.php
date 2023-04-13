<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\News;
use App\Models\Teachers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses=Courses::all();
        $teachers=Teachers::all();
        $news=News::all();
        return view('ui.home',compact(['courses','teachers','news']));
    }
}
