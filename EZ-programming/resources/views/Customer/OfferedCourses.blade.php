@extends('layouts.app')
@section('content')

<div>
    {{-- @php($MyCourse = session('MyCourse')) --}}
    @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif

    <h1 class="container" style="color: black;">Offered Courses</h1>
    <h1 class="container myContainer p-4">
        @if($MyCourses ->count() != 0)
        @foreach($MyCourses as $MyCourse)
        @php($Students = DB::table('registered_courses')->where('Course_id',$MyCourse->Course_id)->get())
        @php($Number=$Students->count())
        <div class='col-md-12 p-2 d-flex'>
            <img src="{{ asset('uploads/Courses/'.$MyCourse->Image) }}" width="200px" height="200px " alt="Image" class="myimg2">
            <div style="font-size: 20px; color: black; padding-top: 20px;">
                <div style="font-size: 40px;">{{$MyCourse->Name}}</div>
                <br>
                Information : {{$MyCourse->Information}}
                <br>
                Price : {{$MyCourse->Price}} EGP
                <br>
                Number Of Registered Students : {{$Number}}

            </div>
        </div>
        @endforeach
        @else
        <div style="color: black; text-align: center;">
            No Owned Courses
        </div>
        @endif
    </h1>
</div>
@endsection