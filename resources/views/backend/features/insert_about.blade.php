@extends('backend.home.master')

@section('keyTitle','Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Profile Information</h2>
    <form action="{{route('insert.about.data')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" class="form-control" name="profession" id="profession" placeholder="Enter your profession">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" name="birthday" id="birthday">
        </div>

        <!-- Age -->
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Enter your age">
        </div>

        <!-- Website -->
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" name="website" id="website" placeholder="Enter your website">
        </div>

        <!-- Degree -->
        <div class="mb-3">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" class="form-control" name="degree" id="degree" placeholder="Enter your degree">
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
        </div>

        <!-- City -->
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city">
        </div>

        <!-- Freelance Status -->
        <div class="mb-3">
            <label for="freelance" class="form-label">Freelance Availability</label>
            <select class="form-control" name="freelance" id="freelance">
                <option value="available">Available</option>
                <option value="not available">Not Available</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
