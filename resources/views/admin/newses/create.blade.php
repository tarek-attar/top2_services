@extends('admin.master')
@section('title', 'All Newses | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Newses</h1>
        <a href="{{ route('admin.newses.index') }}" class="btn btn-success px-5">All Newses</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.newses.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title_en">English Title</label>
            <input type="text" name="title_en" id="title_en" placeholder="English Title" class="form-control"
                value="{{ old('title_en') }}">
        </div>
        <div class="mb-3">
            <label for="title_ar">Arabic Title</label>
            <input type="text" name="title_ar" id="title_ar" placeholder="Arabic Title"
                class="form-control"value="{{ old('title_ar') }}">
        </div>
        <div class="mb-3">
            <label for="content_en">English Content</label>
            <textarea name="content_en" id="content_en" class="form-control" placeholder="English Content" rows="5">{{ old('content_en') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content_ar">Arabic Content</label>
            <textarea name="content_ar" id="content_ar" placeholder="Arabic Content" class="form-control" rows="5">{{ old('content_ar') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
        </div>
        <button class="btn btn-success px-5"><i class="fas fa-check"></i> Add </button>
    </form>
@endsection
