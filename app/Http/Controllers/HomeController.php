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
        $news=News::query()->orderBy('id')->paginate('4');
        return view('ui.home',compact(['courses','teachers','news']));
    }
    public function home_pages($page){
        $courses=Courses::query()->orderBy('id')->paginate('4');
        $teachers=Teachers::query()->with('media')->orderBy('id')->paginate('4');
        $news=News::query()->orderBy('id')->paginate('3');
        return view("ui.$page",compact(['courses','teachers','news']));
    }
}
