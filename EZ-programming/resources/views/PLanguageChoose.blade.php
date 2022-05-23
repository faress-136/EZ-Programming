@extends('layouts.app')

@section('content')
<!-- Modal -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>

<div class="container">
    <div>
        <h1 style="text-align:center;  color: black ;">Choose Programming Language</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                <div class="row">
                    @foreach($PLanguages as $APLanguage)
                    <div class='col-md-1 p-2' style="text-align:center">
                        <a href="/Showcourses/{{$APLanguage->PLanguage}}/{{$StartDate}}/{{$City}}">
                            <img src="{{ asset('uploads/PLanguage/'.$APLanguage->PLanguage_image) }}" width="100px" height="100px " alt="Image" class="myimg2">
                        </a>
                    </div>
                    @endforeach
                </div>
                <div style="text-align: center ;">
                    <a href="#" data-toggle="modal" data-target="#SearchModal{{$StartDate}}{{$City}}">
                        <img src="/uses/Search.png" alt="Rent A Car" width="50px" height="50px">
                        Advanced Search
                    </a>
                </div>
                @include('modals.modal')
            </div>
        </div>
    </div>
</div>

</div>
@if (session('Courses'))
<div>
    @php($Courses = session('Courses'))
    @php($no_Courses = $Courses->count() )
    @if ($no_Courses != 0)
    <h1 class="container myContainer p-4">
        @foreach($Courses as $Course)
        @php($Teacher = DB::table('users')->where('id',$Course->Teacher_id)->first())
        <div class='col-md-12 p-2 d-flex'>
            <img src="{{ asset('uploads/Courses/'.$Course->Image) }}" width="200px" height="200px " alt="Image" class="myimg2">
            <div style="font-size:20px; color: black;">
                <div style="font-size: 40px;">{{$Course->Name}}</div>
                <div style="font-size: 25px;">Teacher : {{$Teacher->name}}</div>
                <br>
                Start Date : {{$Course->Start_date}}
                <br>
                Information : {{$Course->Information}}
                <br>
                Price : {{$Course->Price}} EGP
                <br>

            </div>

            <div style="text-align: left; align-self: end; padding-left: 400px;">
                <form action="/register/{{$Course->id}}/{{$StartDate}}/{{$City}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="btn btn-primary mt-md-3 " style="border-radius: 15px;font-size:1.4rem; box-sizing: 15px">
                        Pick
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </h1>
</div>
@else
<div>
    <h1 class="container myContainer p-4" style="text-align: center; color: black;">
        No Available Courses
    </h1>
</div>
@endif
@endif
@endsection