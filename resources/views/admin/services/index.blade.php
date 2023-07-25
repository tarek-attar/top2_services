@extends('admin.master')
@section('title', 'All Services | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Services</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-success px-5">Add New</a>
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
            <th>English Content</th>
            <th>Arabic Content</th>
            <th>Price</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name_en }}</td>
                <td>{{ $service->name_ar }}</td>
                <td><img width="80" src="{{ asset('uploads/' . $service->image) }}" alt=""></td>
                <td>{{ $service->content_en }}</td>
                <td>{{ $service->content_ar }}</td>
                <td>{{ $service->price }}</td>
                <td>{{ $service->category->name_en }}</td>
                <td>
                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-primary m-1">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button class="btn btn-sm btn-danger btn-delete m-1"><i class="fas fa-times"></i></button>
                    <form class="d-none" action="{{ route('admin.services.destroy', $service->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $services->links() }}
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
