@extends('admin.master')
@section('title', 'All Categories | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Categories</h1>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-success px-5">All Categories</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name_en">English Name</label>
            <input type="text" name="name_en" id="name_en" placeholder="English Name" class="form-control"
                value="{{ old('name_en') }}">
        </div>
        <div class="mb-3">
            <label for="name_ar">Arabic Name</label>
            <input type="text" name="name_ar" id="name_ar" placeholder="Arabic Name"
                class="form-control"value="{{ old('name_ar') }}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
        </div>
        <button class="btn btn-success px-5"><i class="fas fa-check"></i> Add </button>
    </form>
@endsection
