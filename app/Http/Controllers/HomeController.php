<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\News;
use App\Models\Teachers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses=Courses::query()->orderBy('id')->limit(4)->get();
        $teachers=Teachers::query()->with('media')->orderBy('id')->limit(4)->get();
//        dd($teachers);
        $news=News::all();
        return view('ui.home',compact(['courses','teachers','news']));
    }
    public function home_pages($page){
        $courses=Courses::all();
        $teachers=Teachers::all();
        $news=News::all();
        return view("ui.$page",compact(['courses','teachers','news']));
    }
}
