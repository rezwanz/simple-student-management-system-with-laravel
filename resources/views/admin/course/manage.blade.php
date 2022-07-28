@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Courses</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Starting Date</th>
                            <th>Ending Date</th>
                            <th>Fee</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->starting_date }}</td>
                                <td>{{ $course->ending_date }}</td>
                                <td>{{ $course->fee }}</td>
                                <td>{{ $course->short_description }}</td>
                                <td>{!! $course->long_description !!}</td>
                                <td>
                                    <img src="{{ asset($course->image) }}" alt="" style="height: 80px; width: 80px;">
                                </td>
                                <td>{{ $course->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('courses.change-status', ['id' => $course->id]) }}" class="btn btn-secondary">status</a>
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">edit</a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
