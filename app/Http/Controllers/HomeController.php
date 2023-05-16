<?php

namespace App\Http\Controllers;

use App\Models\Commets;
use App\Models\Courses;
use App\Models\Materials;
use App\Models\News;
use App\Models\Teachers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses=Courses::query()->orderBy('id')->limit(4)->get();
        $teachers=Teachers::query()->with('media')->orderBy('id')->limit(4)->get();
//        dd($teachers);
        $news=News::query()->orderBy('id')->paginate('3');
        $comments=Commets::query()->orderBy('id')->limit(4)->get();
        return view('ui.home',compact(['courses','teachers','news','comments']));
    }
    public function home_pages($page){
        $courses=Courses::query()->orderBy('id')->paginate('4');
        $teachers=Teachers::query()->with('media')->orderBy('id')->paginate('4');
        $news=News::query()->orderBy('id')->paginate('3');
        $materials=Materials::all();
        return view("ui.$page",compact(['courses','teachers','news','materials']));
    }
}
