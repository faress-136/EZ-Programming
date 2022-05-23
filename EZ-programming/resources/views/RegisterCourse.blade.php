@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                @foreach($Courses as $Course)
                <div class="container myContainer p-4">
                    <div class="row-md-4">
                        <div class="col-md-6">
                            <h3><img src="{{ asset('uploads/Car/'.$Course->Image) }}" width="100px" height="100px"
                                    alt="Image" class="img myimg">
                                <!-- {{ $Course->Model }} </h3> -->

                                <p>{{$Course->Information}}</p>
                                <p>Cost/Day: {{$Course->Price }} EGP </p>

                                <div class="col-md-12">
                                    <form action="/Rent/{{$Course->id}}" method="GET">
                                        @csrf
                                        <button class="btn btn-primary"
                                            style="border-radius: 20px;position: absolute;bottom: 0;right:0;font-size:1.5rem;">Rent
                                            Now</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection