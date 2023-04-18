<?php

use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
//Route::get('/about',[HomeController::class,'home_about'])->name('home_about');
Route::get('/{page}',[HomeController::class,'home_pages'])->name('pages');
//Route::get('/courses',[HomeController::class,'home_courses'])->name('home_courses');
//Route::get('teachers',HomeController::class,'teachers');
Route::prefix('/admin/adminaka')->group(function () {
    Route::get('/',[AdminHomeController::class,'index']);
    Route::resource('courses',CoursesController::class);
});
//Route::resource('courses',CoursesController::class);
