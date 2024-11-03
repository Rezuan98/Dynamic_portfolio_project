@extends('backend.home.master')

@section('keyTitle','Add Services')

@section('content')
<div class="container mt-5">
    <h2 class="text-center"> Add Services</h2>
    <form action="{{route('insert.services')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Service Title</label>
            <input type="text" class="form-control" name="service_title" id="subject" placeholder="Enter service title">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Service Description</label>
            <textarea name="service_description" class="form-control" placeholder="Enter Service Description" cols="15" rows="3"></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
