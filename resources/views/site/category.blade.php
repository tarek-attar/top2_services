@extends('site.master')

@section('title', 'Home | ' . env('APP_NAME'))

@section('content')
    @php
        $name = 'name_' . app()->currentLocale();
    @endphp
    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>{{ $category->$name }} Services</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($category->services as $service)
                    <div class="col-md-4">
                        @include('site.parts.service_box')
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
