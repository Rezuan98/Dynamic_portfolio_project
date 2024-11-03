@extends('backend.home.master')

@section('keyTitle','Unread Messages');

@section('content')
<div class="container mt-4">
    <h2 style="margin-top: 50px;margin-bottom:30px">Unread Messages</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    
                    
                    <th>Action</th>
                </tr>
            </thead>
            
                <tbody>
                    @foreach ($all_message as $item)
                    <tr id="item-{{ $item->id }}">  <!-- Unique ID for each row -->
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->subject ?? 'N/A' }}</td>
                        <td>{{ $item->message }}</td>
                        
                       <td>
                            
                            <a href="javascript:void(0);" class="btn btn-danger btn-delete m-1" data-id="{{ $item->id }}" >
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </table>
    </div>
</div>
<script>
    $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();  // Prevent default action

        var id = $(this).data('id');  // Get the item ID
        var url = "{{ route('delete.unread.message', '') }}/" + id;  // Construct the URL with the route

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