@extends('front.master')

@section('body')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1800">
        <div class="carousel-indicators">
            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/') }}admin/assets/images/slider-image/1.jpg" class="d-block w-100" alt="" style="height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}admin/assets/images/slider-image/2.webp" class="d-block w-100" alt="..." style="height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}admin/assets/images/slider-image/3.png" class="d-block w-100" alt="..." style="height: 400px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">All Courses</h2>
                    <div class="row mt-4">
                        @foreach($courses as $course)
                            <div class="col-md-3">
                                <a href="{{ route('course-details',['id' => $course->id]) }}" class="text-dark nav-link">
                                    <div class="card">
                                        <img src="{{ asset($course->image) }}" alt="" class="card-img-top" style="height: 200px;">
                                        <div class="card-body">
                                            <h4>{{ $course->title }}</h4>
                                            <p>Fee: {{ $course->fee }}</p>
                                            <span>Starting from: {{ $course->starting_date }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
