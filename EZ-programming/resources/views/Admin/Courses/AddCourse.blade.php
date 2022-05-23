@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Course</h5>
                        <span>Add Course</span>
                    </div>
                </div>
            </div>


            <div class="role justify-content-center">
                <div class="col-lg-10">
                    @if(Session::has('status'))
                    <div class="alert bg-success alert-success text-white" role="alert">
                        {{Session::get('status')}}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 style="color: black;">Add Course</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('AdminAddCourse') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="">Programming Language</label>
                                    <select class="form-control" name="PLanguage" required focus>
                                        <option value="" disabled selected>Programming Language</option>
                                        @foreach($PLanguages as $PLanguage)
                                        <option value="{{$PLanguage->PLanguage}}">{{ $PLanguage->PLanguage}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <div>

                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="Name" class="form-control">
                                        </div>
                                        <div>
                                            <label for="">Office</label>
                                            <select class="form-control" name="City" required focus>
                                                <option value="" disabled selected>Select Office</option>
                                                @foreach($Offices as $Office)
                                                <option value="{{$Office->City}}">{{$Office->City}} ,
                                                    {{$Office->Country}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label for="">Start Date</label>
                                        <input class="p-3 pb-3 pb-md-4 mb-md-2"
                                            style="padding-left: auto; padding-right:auto; padding-top: 20px;"
                                            type="Date" id="Sdate" class="form-control" name="StartDate">
                                        <div class="form-group mb-3">
                                            <label for="">Course Image</label>
                                            <input type="file" name="Image" class="form-control">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="">Cost</label>
                                            <input type="text" name="Cost" class="form-contro">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Details</label>
                                            <textarea class="form-control" id="textArea" rows="4" name="Details">
                                </textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <button class="btn btn-primary">Add Course</button>
                                        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection