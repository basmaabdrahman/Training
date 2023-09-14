@extends('dashboard.layouts.master')
@section('content')
    <div class="row">
        @foreach($courses as $course)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                        </div>
                        <div class="col-9 col-md-12">

                            <div class="numbers">
                                <p class="card-category">{{$course['name']}}</p>
                                <p class="card-title">{{$course['price']}}<p>
                                <p class="card-title">{{$course['content']}}<p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        <form method="get" action="{{route('courses.edit',$course->id)}}">
                        @csrf
                        <button type="submit" class="btn btn-gradient-primary">Edit</button>
                        </form>
                        <form method="post" action="{{route('courses.destroy',$course['id'])}}">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-gradient-primary">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
