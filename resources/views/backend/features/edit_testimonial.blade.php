@extends('backend.home.master')

@section('keyTitle','Add Testimonial')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Insert Testimonial</h2>
    <form action="{{route('update.testimonial',[$edit_testimonial->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $edit_testimonial->name  }}" name="name" id="name" placeholder="Enter your profession">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $edit_testimonial->title  }}" placeholder="Enter Title" id="title">
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Quote</label>
            <input type="text" class="form-control" value="{{ $edit_testimonial->quote  }}" name="quote" id="degree" placeholder="Enter Quotation Text">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">

            @if($edit_testimonial->image)
    <div class="mb-3">
        <label class="form-label">Current Image</label>
        <div>
            <img style="height: 80px; width:70px; border:2px solid blue" src="{{ asset('storage/' . $edit_testimonial->image) }}"   class="img-thumbnail mb-3">
        </div>
    </div>
@endif
        </div>

        <!-- Phone -->
        

        <!-- Email -->
       

        <!-- City -->
       

       
       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
