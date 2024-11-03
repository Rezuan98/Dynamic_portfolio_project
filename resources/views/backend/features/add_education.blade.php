@extends('backend.home.master')

@section('keyTitle','Add Summery')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Add Education</h2>
    <form action="{{route('insert.education')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Subject and Degree</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your subject">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Session</label>
            <input type="text" class="form-control" name="session" placeholder="Enter session" id="session">
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Institution Name</label>
            <input type="text" class="form-control" name="institute" id="institute" placeholder="Enter institution">
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">Description:</label>
           <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="degree" placeholder="Enter Quotation Text">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
