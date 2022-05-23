@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                <a href="{{url('SearchCourses') }}">
                    <img class="center mb-lg-3" src="/uses/Student.png" alt="Student" width="1000px" height="500px">
                </a>
                <a href="{{url('OfferCourse') }}">
                    <img class="center" src="/uses/Teacher.png" alt="Teacher" width="1000px" height="500px">
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection