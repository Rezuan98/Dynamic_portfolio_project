@extends('backend.home.master')

@section('keyTitle', 'Add Info')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Information</h2>
    <form action="{{route('insert.overview.data')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Emoji (Image) -->
        <div class="mb-3">
            <label for="emoji" class="form-label">Emoji</label>
            <input type="file" class="form-control" name="emoji" id="emoji" accept="image/*">
        </div>

        <!-- Number -->
        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="number" class="form-control" name="number" id="number" placeholder="Enter number">
        </div>

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter description"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
