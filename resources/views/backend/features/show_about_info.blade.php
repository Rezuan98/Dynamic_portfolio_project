@extends('backend.home.master')

@section('keyTitle','All about info')

@section('content')


<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Profession</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Website</th>
                    <th>Degree</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Freelance</th>
                    <th>Action</th>
                </tr>
            </thead>
            
                <tbody>
                    @foreach ($aboutInfo as $item)
                    <tr id="item-{{ $item->id }}">  <!-- Unique ID for each row -->
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->profession }}</td>
                        <td>{{ $item->birthday }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->website ?? 'N/A' }}</td>
                        <td>{{ $item->degree }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ ucfirst($item->freelance) }}</td>
                        <td>
                            <a href="{{ route('edit.about.info', ['id' => $item->id]) }}" class="btn btn-success m-1">Edit</a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-delete m-1" data-id="{{ $item->id }}">
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
        var url = "{{ route('delete.about.info', '') }}/" + id;  // Construct the URL with the route

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



