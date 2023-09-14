@extends('dashboard.layouts.master')
@section('content')
    <form method="post" action="{{route('courses.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Content</label><br>
            <input type="text" class="form-control" name="content">

        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Price</label>
            <input type="number" step="250" class="form-control" name="price">
        </div>
        <button type="submit" class="btn btn-gradient-primary">Submit</button>

    </form>
@endsection
