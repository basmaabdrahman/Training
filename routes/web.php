<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\CourseController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboradController::class,'index'])->name('dashboard.index');
Route::get('/courses/create',[CourseController::class,'create'])->name('courses.create');
Route::post('/courses',[CourseController::class,'store'])->name('courses.store');
Route::get('/courses/{course}',[CourseController::class,'show'])->name('courses.show');
Route::get('courses/{course}/edit',[CourseController::class,'edit'])->name('courses.edit');
Route::put('/courses/{course}',[CourseController::class,'update'])->name('courses.update');
Route::delete('/courses/{course}',[CourseController::class,'destroy'])->name('courses.destroy');
