<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\CourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
        return view('courses.create-course');
    }
    public function store(Request $request){
        Course::create([
            'name'=>$request->input('name'),
            'content'=>$request->input('content'),
            'price'=>$request->input('price'),
        ]);
        $courses=Course::all();
        return (view('dashboard.index0',compact('courses')));


    }
    public function show(){
        $courses=Course::all();
        return(view('dashboard.index0',compact('courses')));
    }
    public function edit($id){
        $course=Course::find($id);

        return(view('courses.edit-course',compact('course')));
    }
    public function update(Request $request ,$id){
        $courses=Course::find($id);
        $courses->name=$request->input('name');
        $courses->price=$request->input('price');
        $courses->content=$request->input('content');

        $courses->save();
        return(view('dashboard.layouts.master'));

    }
    public function destroy($id){
        $course=Course::destroy($id);
        $courses=Course::all();
        return(view('dashboard.index0',compact('courses')));


    }


}
