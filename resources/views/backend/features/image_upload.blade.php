@extends('backend.home.master');


@section('content')


<div class="mb-4 mt-5">

    <form action="{{route('insert.product')}}" method="post" enctype="multipart/form-data">
        @csrf
       <div class="container ">
        <input class="form-control" type="file" name="product_image[]" multiple id="product_image">
        

        <button type="submit" class="btn btn-primary">submit</button>
        <div id="preview_img">

        </div>
       </div>
    </form>
</div>

<br>

<div class="container">
    <table class="table">
        ID
        <th>
            Image
        </th>
        <th>
         
        </th>
        <th>
           Action
        </th>
   <?php 
   use App\Models\Product;
   $data = Product::all();
   
   ?>
   
        <tbody>
            @foreach ($data as $item)
                
           
            <tr>
                <td> {{$item->id}}</td>
            <td><img src="{{asset('storage/'.$item->product_image)}}" alt="" width="60px" height="50px"></td>
            <td>
      <a href="{{route('edit.product',['id' => $item->id])}}" class="btn btn-success">Edit  </a>
      <a href="{{route('delete.product',['id' => $item->id])}}" class="btn btn-delete">delete</a>

            </td>
           
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
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
 
 <!-- SweetAlert script -->
 
 


@endsection