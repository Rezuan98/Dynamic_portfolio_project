@extends('backend.home.master')

@section('keyTitle','edit profile info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Update Products</h2>
    <form action="{{route('update.products')}}" method="post" enctype="multipart/form-data">
@csrf  


      
       <input type="hidden" name="userid" value="{{$products->id}}" id="">
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label"> Products Name:</label>
        <input type="text" class="form-control" value="{{$products->name}}" name="name" id="name" placeholder="Enter your name">
      </div>
      <!-- Banner Image -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">Branding Image</label>
        <input type="file" class="form-control" name="branding_image" id="bannerImage" accept="image/*">
        @if($products->product_image)
    
@endif
      </div>
      
      
      
    
    
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>


    </form>
  </div>
@endsection