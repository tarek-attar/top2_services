@extends('admin.master')
@section('title', 'Edit Services | ' . env('APP_NAME'))

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Services</h1>
        <a href="{{ route('admin.services.index') }}" class="btn btn-success px-5">All Services</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.services.update', $service->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name_en">English Name</label>
            <input type="text" name="name_en" id="name_en" placeholder="English Name" class="form-control"
                value="{{ old('name_en') == '' ? $service->name_en : old('name_en') }}">
        </div>

        <div class="mb-3">
            <label for="name_ar">Arabic Name</label>
            <input type="text" name="name_ar" id="name_ar" placeholder="Arabic Name"
                class="form-control"value="{{ old('name_ar') == '' ? $service->name_ar : old('name_ar') }}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <img width="80" src="{{ asset('uploads/' . $service->image) }}" alt="image">
        </div>
        <div class="mb-3">
            <label for="content_en">English Content</label>
            <textarea name="content_en" id="content_en" placeholder="English Content" class="form-control" rows="5">{{ old('content_en') == '' ? $service->content_en : old('content_en') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content_ar">Arabic Content</label>
            <textarea name="content_ar" id="content_ar" placeholder="Arabic Content" class="form-control" rows="5">{{ old('content_ar') == '' ? $service->content_ar : old('content_ar') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" placeholder="Price" class="form-control"
                value="{{ old('price') == '' ? $service->price : old('price') }}">
        </div>
        {{-- <div class="mb-3">
            <label for="price">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $item)
                    <option {{ $service->category_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                        {{ $item->name_en  }}
                    </option>
                @endforeach
            </select>
        </div> --}}
        {{--  قيمة old value مش شغالة --}}
        <div class="mb-3">
            <label for="price">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $item)
                    <option
                        {{ old('category_id') == $item->id ? 'selected' : ($service->category_id == $item->id ? 'selected' : '') }}
                        value="{{ $item->id }}">
                        {{ $item->name_en }}
                    </option>
                @endforeach
            </select>
        </div>



        <button class="btn btn-success px-5"><i class="fas fa-check"></i> Update </button>
    </form>
@endsection
