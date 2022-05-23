@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Your Course
                        <a href="{{url('home') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('OfferCourse') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Programming Language</label>
                            <select class="form-control" name="PL" required focus>
                                <option value="" disabled selected>Programming Language</option>
                                @foreach($PLanguages as $PLanguage)
                                <option value="{{$PLanguage->PLanguage}}">{{ $PLanguage->PLanguage}}</option>
                                @endforeach
                            </select>
                            <br>
                            <div>

                                <div class="form-group mb-3">
                                    <label for="">Course Name</label>
                                    <input type="text" name="Name" class="form-control">
                                </div>
                                <div>
                                    <label for="">Office</label>
                                    <select class="form-control" name="City" required focus>
                                        <option value="" disabled selected>Select Office</option>
                                        @foreach($Offices as $Office)
                                        <option value="{{$Office->City}}">{{$Office->City}} , {{$Office->Country}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <label for="">Start Date</label>
                                <input class="p-3 pb-3 pb-md-4 mb-md-2" style="padding-left: auto; padding-right:auto; padding-top: 10px;" type="Date" id="Sdate" class="form-control" name="StartDate">
                                <br>
                                <div class="form-group mb-3">
                                    <label for="">Course Image</label>
                                    <input type="file" name="Image" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Course Cost</label>
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
</div>
@endsection