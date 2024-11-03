@extends('backend.home.master')

@section('keyTitle','Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Branding </h2>
    <form action="{{route('insert.branding')}}" method="post" enctype="multipart/form-data">
@csrf
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Branding Name</label>
        <input type="text" class="form-control" name="branding_name" id="name" placeholder="Enter branding name">
      </div>
      <!-- Banner Image -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">Branding Image</label>
        <input type="file" class="form-control" name="branding_image" id="bannerImage" accept="image/*">
      </div>
      
      
      
      
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection