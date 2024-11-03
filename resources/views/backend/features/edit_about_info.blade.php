@extends('backend.home.master')

@section('keyTitle', 'Edit Profile Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Edit Profile Information</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update.about.info', $aboutInfo->id) }}" method="post">
        @csrf
        <!-- Profession -->
        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" class="form-control" name="profession" id="profession" value="{{ old('profession', $aboutInfo->profession) }}" required>
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" name="birthday" id="birthday" value="{{ old('birthday', $aboutInfo->birthday) }}" required>
        </div>

        <!-- Age -->
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" value="{{ old('age', $aboutInfo->age) }}" required>
        </div>

        <!-- Website -->
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" name="website" id="website" value="{{ old('website', $aboutInfo->website) }}">
        </div>

        <!-- Degree -->
        <div class="mb-3">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" class="form-control" name="degree" id="degree" value="{{ old('degree', $aboutInfo->degree) }}" required>
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $aboutInfo->phone) }}" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $aboutInfo->email) }}" required>
        </div>

        <!-- City -->
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" value="{{ old('city', $aboutInfo->city) }}" required>
        </div>

        <!-- Freelance -->
        <div class="mb-3">
            <label for="freelance" class="form-label">Freelance</label>
            <select class="form-control" name="freelance" id="freelance" required>
                <option value="available" {{ old('freelance', $aboutInfo->freelance) == 'available' ? 'selected' : '' }}>Available</option>
                <option value="not available" {{ old('freelance', $aboutInfo->freelance) == 'not available' ? 'selected' : '' }}>Not Available</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Info</button>
    </form>
</div>
@endsection
