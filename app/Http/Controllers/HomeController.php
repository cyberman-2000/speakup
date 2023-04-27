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
        $teachers=Teachers::query()->orderBy('id')->limit(4)->get();
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
