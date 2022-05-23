@extends('layouts.app')

@section('content')
<!-- Modal -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>

<script>
$(document).ready(function() {
    $('.dropdown-toggle').dropdown();
});
</script>
<div class="container">
    <div class="page- header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Courses</h5>
                        <span>List of all Courses</span>
                        <a href="AdminCourse">
                            <img src="/uses/course.jpg" alt="Add Car" width="25px" height="25px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if(Session::has('status'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('status')}}
            </div>
            @endif
            <div class="card">

                <div class="card-body">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Image</th>
                                <th>PLanguage</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th class="nosort">Teacher ID</th>
                          
                                <th class="nosort" style="text-align: right;"><a href="#" data-toggle="modal" data-target="#SearchModal">
                                        <img src="/uses/Search.png" alt="Search" width="25px" height="25px">
                                        Advanced Search
                                    </a>
                                    @include('Admin.Courses.searchmodal')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($Courses)>0)
                            @foreach($Courses as $Course)
                            <tr>
                                <td>{{$Course->id}}</td>
                                <td><img src="{{ asset('uploads/Courses/'.$Course->Image) }}" class="table-user-thumb"
                                        style="width: 50px; height: 50px;" alt=""></td>
                                <td>{{$Course->PLanguage}}</td>
                                <td>{{$Course->Price}}</td>
                                <td>{{$Course->Price}} EGP</td>
                                <td>{{$Course->Teacher_id}}</td>
                             
                                <td style="text-align: right;">
                                    <div class="table-actions">
                                        <a href="#" data-toggle="modal" data-target="#infoModal{{$Course->id}}">
                                            <img src="/uses/InfoICON.png" alt="Info" width="25px" height="25px"></a>
                                        <a href="#" data-toggle="modal" data-target="#deleteModal{{$Course->id}}">
                                            <img src="/uses/TrashICON.png" alt="Delete" width="25px" height="25px">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @include('Admin.Courses.deleteModal')
                            @endforeach
                            @else
                            <td>No Users To Display</td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection