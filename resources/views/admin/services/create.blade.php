@extends('admin.master')
@section('title', 'All Services | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Services</h1>
        <a href="{{ route('admin.services.index') }}" class="btn btn-success px-5">All Services</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name_en">English Name</label>
            <input type="text" name="name_en" id="name_en" placeholder="English Name" class="form-control"
                value="{{ old('name_en') }}">
        </div>
        <div class="mb-3">
            <label for="name_ar">Arabic Name</label>
            <input type="text" name="name_ar" id="name_ar" placeholder="Arabic Name" class="form-control"
                value="{{ old('name_ar') }}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
        </div>
        <div class="mb-3">
            <label for="content_en">English Content</label>
            <textarea name="content_en" id="content_en" placeholder="English Content" class="form-control" rows="5">{{ old('content_en') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content_ar">Arabic Content</label>
            <textarea name="content_ar" id="content_ar" placeholder="Arabic Content" class="form-control" rows="5">{{ old('content_ar') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Price" class="form-control"
                value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label for="price">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $item)
                    <option {{ old('category_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                        {{ $item->name_en }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success px-5"><i class="fas fa-check"></i> Add </button>
    </form>
@endsection
