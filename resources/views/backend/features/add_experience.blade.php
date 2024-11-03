@extends('backend.home.master')

@section('keyTitle','Add Summery')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Add Experience</h2>
    <form action="{{route('insert.experience')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Job Title</label>
            <input type="text" class="form-control" name="job_title" id="subject" placeholder="Enter Job title">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Job Time Range</label>
            <input type="text" class="form-control" name="job_time_range" placeholder="Enter Job time range" id="session">
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Office Address</label>
            <input type="text" class="form-control" name="office_address" id="institute" placeholder="Enter Address">
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">Prominant Tasks:</label>
<textarea name="tasks" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
