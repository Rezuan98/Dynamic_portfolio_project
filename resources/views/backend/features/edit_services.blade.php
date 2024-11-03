@extends('backend.home.master')

@section('keyTitle','Edit Services')

@section('content')
<div class="container mt-5">
    <h2 class="text-center"> Edit Services</h2>
    <form action="{{route('update.services',[$edit_services->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Service Title</label>
            <input type="text" class="form-control" value="{{ $edit_services->service_title }}" name="service_title" id="subject" placeholder="Enter service title">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Service Description</label>
            <textarea name="service_description" value="" class="form-control" placeholder="Enter Service Description" cols="15" rows="3">{{ $edit_services->service_description }}</textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>
@endsection
