@extends('backend.home.master')

@section('keyTitle','edit profile info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Update Apps</h2>
    <form action="{{route('update.apps')}}" method="post" enctype="multipart/form-data">
@csrf  


      
       <input type="hidden" name="userid" value="{{$edit_apps->id}}" id="">
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$edit_apps->name}}" name="name" id="name" placeholder="Enter your name">
      </div>
      <!-- Banner Image -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">App Image</label>
        <input type="file" class="form-control" name="app_image" id="bannerImage" accept="image/*">
        @if($edit_apps->app_image)
    
@endif
      </div>
      
      
      
    
    
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>


    </form>
  </div>
@endsection