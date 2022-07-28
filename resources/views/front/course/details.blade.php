@extends('front.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="{{ asset($course->image) }}" alt="" class="w-100" style="height: 400px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3>{{ $course->title }}</h3>
                        <p>Fee: {{ $course->fee }}</p>
                        <p>
                            <span>Starting Date: {{ $course->starting_date }}</span>
                            <span> Ending Date: {{ $course->ending_date }}</span>
                        </p>
                        <p>{{ $course->short_description }}</p>
                        <form action="{{ route('course-enroll') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <input type="submit" class="btn btn-primary" {{ $hasEnroll == true ? 'disabled' : '' }}  value="Enroll">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div>
                        {!! $course->long_description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
