@extends('layouts.app')
@section('content')
<div>
    <h1 class="container" style="color: black;">My Courses</h1>
    @if($MyCourses ->count() != 0)
    @foreach($MyCourses as $MyCourse)
    @php($Teacher = DB::table('users')->where('id',$MyCourse->Teacher_id)->first())
    <h1 class="container myContainer p-4">
        <div class='col-md-12 p-2 d-flex'>
            <img src="{{ asset('uploads/Courses/'.$MyCourse->Image) }}" width="200px" height="200px " alt="Image" class="myimg2">
            <div style="font-size: 20px; color: black; padding-top: 20px;">
                <div style="font-size: 40px;">{{$MyCourse->Name}}</div>
                <div style="font-size: 25px;">Teacher : {{$Teacher->name}}</div>
                Start date : {{$MyCourse->Start_date}}
                <br>
                City : {{$MyCourse->City}}
                @if($MyCourse->Paid == "No")
                <div style="text-align: left; align-self: end; padding-left: 400px;">
                    <form action="/Pay/{{$MyCourse->registeredid}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-md-3 " style="border-radius: 15px;font-size:1.4rem; box-sizing: 15px; ">
                            Pay
                        </button>
                    </form>
                </div>
                @endif
                <div style="text-align: left; align-self: end; padding-left: 30px;">
                    <form action="/Cancel/{{$MyCourse->registeredid}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-md-3 " style="border-radius: 15px;font-size:1.4rem; box-sizing: 15px">
                            Cancel Reservation
                        </button>
                    </form>
                </div>
            </div>

    </h1>
    @endforeach
    @else
    <div style="color: black; text-align: center;">
        No Registered Courses
    </div>
    @endif
</div>
@endsection