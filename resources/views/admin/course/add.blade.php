@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Create Course</h4>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Starting Date</label>
                                <div class="col-md-8">
                                    <input type="date" name="starting_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Ending Date</label>
                                <div class="col-md-8">
                                    <input type="date" name="ending_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Fee</label>
                                <div class="col-md-8">
                                    <input type="number" name="fee" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Course Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Course Sub Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="sub_images[]" multiple>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Create Course">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
