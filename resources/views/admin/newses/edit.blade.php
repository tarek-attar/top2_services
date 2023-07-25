@extends('admin.master')
@section('title', 'Edit Newses | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit News</h1>
        <a href="{{ route('admin.newses.index') }}" class="btn btn-success px-5">All Newses</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.newses.update', $news->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title_en">English Title</label>
            <input type="text" name="title_en" id="title_en"
                value="{{ old('title_en') == '' ? $news->title_en : old('title_en') }}" placeholder="English Title"
                class="form-control" value="{{ old('title_en') }}">
        </div>
        <div class="mb-3">
            <label for="title_ar">Arabic Title</label>
            <input type="text" name="title_ar" id="title_ar"
                value="{{ old('title_ar') == '' ? $news->title_ar : old('title_ar') }}" placeholder="Arabic Title"
                class="form-control"value="{{ old('title_ar') }}">
        </div>
        <div class="mb-3">
            <label for="content_en">English Content</label>
            <textarea name="content_en" id="content_en" class="form-control" placeholder="English Content" rows="5">{{ old('content_en') == '' ? $news->content_en : old('content_en') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content_ar">Arabic Content</label>
            <textarea name="content_ar" id="content_ar" value="{{ $news->content_ar }}" placeholder="Arabic Content"
                class="form-control" rows="5">{{ old('content_ar') == '' ? $news->content_ar : old('content_ar') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <img width="80" src="{{ asset('uploads/' . $news->image) }}" alt="image">

        </div>
        <button class="btn btn-success px-5"><i class="fas fa-check"></i> Update </button>
    </form>
@endsection
