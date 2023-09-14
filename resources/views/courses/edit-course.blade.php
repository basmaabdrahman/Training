@extends('dashboard.layouts.master')
@section('content')
    <form method="post" action="{{route('courses.update',$course->id)}}">
        @csrf
        @method("PUT")
        <!-- Form Group (username)-->
        <label class="small mb-1 stm" for="inputUsername"
               style="position: relative; top: .3rem; padding-left: 3px;">Course name</label>
        <input value="{{$course->name}}" class="form-control" id="inputUsername" type="text" name="name">
        <label class="small mb-1 stm" for="inputUsername"
               style="position: relative; top: .3rem; padding-left: 3px;">Price</label>
        <input  class="form-control" id="inputUsername" type="number" step="150" name="price" value="{{$course->price}}">
        <label class="small mb-1 stm" for="inputUsername"
               style="position: relative; top: .3rem; padding-left: 3px;">Content</label>
        <input class="form-control" id="inputUsername" type="text" name="content" value="{{$course->content}}">
        <button type="submit" class="btn btn-gradient-primary">UPDATE</button>

    </form>
@endsection
