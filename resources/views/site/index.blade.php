@extends('site.master')

@section('title', 'Home | ' . env('APP_NAME'))

@section('content')
    @php
        $name = 'name_' . app()->currentLocale();
    @endphp
    <div class="hero-slider">
        @foreach ($slider_services as $slider)
            <div class="slider-item th-fullpage hero-area"
                style="background-image: url({{ asset('uploads/' . $slider->image) }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 text-center">
                            <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">SERVICE</p>
                            <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{ $slider->$name }}
                            </h1>
                            <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn"
                                href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <section class="product-category section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Product Category</h2>
                    </div>
                </div>
                @foreach ($categories as $category)
                    <div class="col-md-6">
                        <div class="category-box category-box-2">
                            <a href="{{ route('site.category', $category->id) }}">
                                <img src="{{ asset('uploads/' . $category->image) }}" alt="" />
                                <div class="content">
                                    <h3>{{ $category->$name }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Trendy Services</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        @include('site.parts.service_box')
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
