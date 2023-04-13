<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\News;
use App\Models\Teachers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $date = News::query()->select("when")->get();
//        dd($date);
        foreach ($date as $value){
            $ts= strtotime($value->when);
           $day[]= date('d', $ts);
           $month=date('M', $ts);
           $year=date('Y', $ts);
           $time= date('H:i', $ts);
        }
//        dd($day);
        $courses=Courses::all();
        $teachers=Teachers::all();
        $news=News::all();
        return view('ui.home',compact(['courses','teachers','news']));
    }
}
