@extends('backend.home.master')

@section('keyTitle', 'Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Information</h2>
    <form action="{{ route('update.skill',['id' => $skills->id]) }}" method="post">
    @csrf

   <!-- IT Skill Name (Multiple Selection) -->
   <div class="mb-3">
    <label for="skill_name" class="form-label">Skill Name</label>
    <input value="{{$skills->skill_name}}" class="form-control" type="text" name="skill_name" id="">
   </div>

    <!-- Skill Capacity -->
    <div class="mb-3">
        <label for="skill_capacity" class="form-label">Skill Capacity</label>
        <input value="{{$skills->skill_capacity}}" class="form-control" type="text" name="skill_capacity" id="">
        <button type="submit" class="btn btn-primary m-2">Update Skill</button>
    </form>
    </div>
    



    
    
@endsection
