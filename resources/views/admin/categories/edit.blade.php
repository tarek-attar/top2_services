@extends('admin.master')
@section('title', 'Edit Categories | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-success px-5">All Categories</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name_en">English Name</label>
            <input type="text" name="name_en" id="name_en" placeholder="English Name" class="form-control"
                value="{{ $category->name_en }}">
        </div>
        <div class="mb-3">
            <label for="name_ar">Arabic Name</label>
            <input type="text" name="name_ar" id="name_ar" placeholder="Arabic Name" class="form-control"
                value="{{ $category->name_ar }}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <img width="80" src="{{ asset('uploads/' . $category->image) }}" alt="">
        </div>
        <button class="btn btn-success px-5"><i class="fas fa-check"></i> Update </button>
    </form>
@endsection
