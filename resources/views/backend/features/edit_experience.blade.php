@extends('backend.home.master')

@section('keyTitle','Add Summery')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    
   <div class="col-md-8 ">
    <h2 class="text-center">Edit experience</h2>
    <form action="{{route('update.experience',[$edit_experience->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Job Title</label>
            <input type="text" class="form-control" value="{{ $edit_experience->job_title }}" name="job_title" id="subject" placeholder="Enter your subject">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Job Time Range</label>
            <input type="text" class="form-control" value="{{ $edit_experience->job_time_range }}" name="job_time_range" placeholder="Enter Job time range" id="session">
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Office Address and Contact:</label>
            <input type="text" class="form-control" name="office_address" value="{{ $edit_experience->office_address }}" id="institute" placeholder="Enter Address and contact">
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">Prominant Tasks:</label>
            
            <textarea name="tasks" id="" class="form-control"  cols="30" rows="10">{{ $edit_experience->prominant_tasks }}</textarea>

        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
</div>
@endsection
