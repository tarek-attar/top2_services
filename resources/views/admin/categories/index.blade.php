@extends('admin.master')
@section('title', 'All Categories | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Categories</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success px-5">Add New</a>
    </div>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif
    <table class="table table-bordered table-hover table-striped">
        <tr class="bg-dark text-white">
            <th>ID</th>
            <th>English Name</th>
            <th>Arabic Name</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name_en }}</td>
                <td>{{ $category->name_ar }}</td>
                <td> <img width="80" src="{{ asset('uploads/' . $category->image) }}" alt=""> </td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-danger btn-delete"><i class="fas fa-times"></i></button>
                    <form class="d-none" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {{ $categories->links() }}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script>
        $('.btn-delete').click(function(e) {
            let form = $(this).next('form');
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
                    form.submit();
                }
            });
        });
    </script>
    <script>
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 2000);
    </script>
@endsection

{{-- @section('scripts')
    هذا حل شات جي بي تي
    <form class="d-inline" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="showAlert()" class="btn btn-sm btn-danger"><i
                                class="fas fa-times"></i></button>
                    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert() {
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
                    // Submit the form to delete the category
                    const form = document.querySelector(
                        'form[action="{{ route('admin.categories.destroy', $category->id) }}"]');
                    if (form) {
                        form.submit();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Form not found!'
                        });
                    }
                }
            });
        }
    </script>
@endsection --}}
