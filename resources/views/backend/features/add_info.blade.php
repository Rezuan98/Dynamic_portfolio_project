@extends('backend.home.master')

@section('keyTitle','Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Profile Information</h2>
    <form action="{{route('insert.profile.info')}}" method="post" enctype="multipart/form-data">
@csrf
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
      </div>
      <!-- Banner Image -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">Banner Image</label>
        <input type="file" class="form-control" name="bannerImage" id="bannerImage" accept="image/*">
      </div>
      
      
      
      <!-- Profile Image -->
      <div class="mb-3">
        <label for="profileImage" class="form-label">Profile Image</label>
        <input type="file" class="form-control" name="profileImage" id="profileImage" accept="image/*">
      </div>
      
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection