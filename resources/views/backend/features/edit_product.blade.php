@extends('backend.home.master')

@section('keyTitle','edit product')

@section('content')
<div class="container">

<form action="{{route('update.product',[ 'id' => $product->id])}}" enctype="multipart/form-data" method="post">
   @csrf
   
   
    <img style="border:2px solid black;" class="m-2" src="{{ asset('storage/' . $product->product_image) }}" alt="Current Image" width="100" height="80">

    <input class="form-control-file m-2" type="file" name="product_image[]" multiple id="product_image">
    
    
        
        <div id="preview_img">
    
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
</form>
</div>


<script>
    $(document).ready(function() {
     $('#product_image').on('change', function() { // on file input change
         if (window.File && window.FileReader && window.FileList && window.Blob) { // check File API supported
             var data = $(this)[0].files; // this file data
             $('#preview_img').empty(); // Clear previous previews
 
             $.each(data, function(index, file) { // loop through each file
                 if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)) { // check supported file type
                     var fRead = new FileReader(); // new filereader
                     fRead.onload = (function(file) { // trigger function on successful read
                         return function(e) {
                             // Create a container for the image and the button
                             var container = $('<div class="image-container"></div>');
                             
                             // Create the image element
                             var img = $('<img/>')
                                 .addClass('thumb')
                                 .attr('src', e.target.result)
                                 .width(100)
                                 .height(80); // create image element 
 
                             // Create the cancel button
                             var cancelButton = $('<button class="cancel-btn">X</button>')
                                 .click(function() {
                                     container.remove(); // Remove the image and button on click
                                 });
 
                             // Append the image and button to the container
                             container.append(img).append(cancelButton);
 
                             // Append the container to the output element
                             $('#preview_img').append(container);
                         };
                     })(file);
                     fRead.readAsDataURL(file); // URL representing the file's data
                 }
             });
         } else {
             alert("Your browser doesn't support File API!"); // if File API is absent
         }
     });
 });
 
     </script>

@endsection