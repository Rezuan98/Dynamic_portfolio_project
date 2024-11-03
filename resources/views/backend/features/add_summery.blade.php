@extends('backend.home.master')

@section('keyTitle','Add Summery')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Add Summery</h2>
    <form action="{{route('insert.summery')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Profession -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your profession">
        </div>

        <!-- Birthday -->
        <div class="mb-3">
            <label for="title" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Enter Title" id="title">
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="degree" placeholder="Enter Quotation Text">
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">phone</label>
            <input type="text" class="form-control" name="phone" id="degree" placeholder="Enter Quotation Text">
        </div>
        <div class="mb-3">
            <label for="degree" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="degree" placeholder="Enter Quotation Text">
        </div>
        
        

        <!-- Phone -->
        

        <!-- Email -->
       

        <!-- City -->
       

       
       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
