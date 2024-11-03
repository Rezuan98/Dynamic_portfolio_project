@extends('backend.home.master')

@section('keyTitle','Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Product </h2>
    <form action="{{route('insert.products')}}" method="post" enctype="multipart/form-data">
@csrf
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="product_name" id="name" placeholder="Enter your name">
      </div>
      <!-- Banner Image -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">Product Image</label>
        <input type="file" class="form-control" name="product_image" id="bannerImage" accept="image/*">
      </div>
      
      
      
      
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection