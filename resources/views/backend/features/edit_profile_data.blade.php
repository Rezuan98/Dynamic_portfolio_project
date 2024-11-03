@extends('backend.home.master')

@section('keyTitle','edit profile info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Update Profile Information</h2>
    <form action="{{route('update.profile.info')}}" method="post" enctype="multipart/form-data">
@csrf  


      
       <input type="hidden" name="userid" value="{{$userinfo->id}}" id="">
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$userinfo->name}}" name="name" id="name" placeholder="Enter your name">
      </div>
      <!-- Banner Image -->
      <div class="mb-3">
        <label for="bannerImage" class="form-label">Banner Image</label>
        <input type="file" class="form-control" name="bannerImage" id="bannerImage" accept="image/*">
        @if($userinfo->banner_image)
    <div class="mb-3">
        <label class="form-label">Current Banner Image</label>
        <div>
            <img style="height: 80px; width:70px; border:2px solid blue" src="{{ asset('storage/' . $userinfo->banner_image) }}" alt="Banner Image"  class="img-thumbnail mb-3">
        </div>
    </div>
@endif
      </div>
      
      
      
      <!-- Profile Image -->
      <div class="mb-3">
        <label for="profileImage" class="form-label">Profile Image</label>
        <input type="file" class="form-control" name="profileImage" id="profileImage" accept="image/*">
        <div class="mb-3">
            <label class="form-label">Current Banner Image</label>
            <div>
                <img style="height: 80px; width:70px; border:2px solid blue" src="{{ asset('storage/' . $userinfo->profile_image) }}" alt="Banner Image"  class="img-thumbnail mb-3">
            </div>
    </div>
    
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>


    </form>
  </div>
@endsection