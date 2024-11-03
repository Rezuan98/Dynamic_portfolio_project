@extends('backend.home.master')

@section('keyTitle','Add Summery')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Edit Education</h2>
    <form action="{{route('update.education',[$edit_education->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Subject</label>
            <input type="text" class="form-control" value="{{ $edit_education->subject }}" name="subject" id="subject" placeholder="Enter your subject">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Session</label>
            <input type="text" class="form-control" value="{{ $edit_education->session }}" name="session" placeholder="Enter session" id="session">
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Institution Name</label>
            <input type="text" class="form-control" name="institute" value="{{ $edit_education->institute_name }}" id="institute" placeholder="Enter institution">
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">Description:</label>
            <input type="text" class="form-control" name="description" id="degree" value="{{ $edit_education->description }}" placeholder="Enter Quotation Text">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
