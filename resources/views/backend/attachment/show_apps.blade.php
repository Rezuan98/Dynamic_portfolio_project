@extends('backend.home.master')



@section('content')

<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th> App Name</th>
                    <th>App Image</th>
                  
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($show_apps as $item)
                <tr  id="item-{{ $item->id }}">
                   ;
                    <td>{{ $item->id }}</td>
                    <td class="text-center mt-5">{{ $item->app_name }}</td>
                    <
                    <td>
                        @if($item->app_image)
                            <img class="rounded-circle" src="{{ asset('storage/' . $item->app_image) }}" alt="Banner Image" width="80" height="80" class="img-thumbnail">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('edit.apps',['id' => $item->id])}}" class="btn btn-success">edit</a>
                       
                        <a href="javascript:void(0);" class="btn btn-danger btn-delete m-1" data-id="{{ $item->id }}">
                            Delete
                        </a>
                   

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();  // Prevent default action

        var id = $(this).data('id');  // Get the item ID
        var url = "{{ route('delete.apps', '') }}/" + id;  // Construct the URL with the route

        // SweetAlert confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, make the AJAX DELETE request
                $.ajax({
                    url: url,  // URL to send the request to
                    type: 'DELETE',  // Use DELETE method
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'  // Send CSRF token in headers
                    },
                    success: function(response) {
                        if (response.success) {  // Check if the server returned success
                            Swal.fire(
                                'Deleted!',
                                response.success,  // Display server response message
                                'success'
                            );
                            // Remove the corresponding table row from the DOM
                            $('#item-' + id).remove();  // Remove the row with the specific ID
                        } else {
                            Swal.fire(
                                'Oops!',
                                'Something went wrong. Please try again later.',
                                'error'
                            );
                        }
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Oops!',
                            'Something went wrong. Please try again later.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>


@endsection