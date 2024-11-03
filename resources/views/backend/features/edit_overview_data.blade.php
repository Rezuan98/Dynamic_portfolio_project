@extends('backend.home.master')

@section('keyTitle', 'edit overview')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Information</h2>
    <form action="{{route('update.overview.info',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Emoji (Image) -->
        <div class="mb-3">
            <label for="emoji" class="form`-label">Emoji</label>
            <input type="file" class="form-control" name="emoji" id="emoji" accept="image/*">
        
            <div class="mb-3">
                <label class="form-label">Current emoji </label>
                <div>
                    <img style="height: 80px; width:70px; border:2px solid blue" src="{{ asset('storage/' . $data->imogi) }}" alt="Banner Image"  class="img-thumbnail mb-3">
                </div>
            </div>
        </div>

        <!-- Number -->
        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="number" value="{{$data->number}}" class="form-control" name="number" id="number" placeholder="Enter number">
        </div>

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{$data->title}}" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" value="{{$data->desc}}" name="description" id="description" rows="4" placeholder="Enter description"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
