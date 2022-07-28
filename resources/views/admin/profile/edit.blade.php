@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Update Profile</h4>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" value="{{ auth()->user()->name }}" name="name" class="form-control">
                                    <span class="text-danger mt-2">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" value="{{ auth()->user()->email }}" name="email" class="form-control">
                                    <span class="text-danger mt-2">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" value="{{ auth()->user()->userDetail->phone }}" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">NID</label>
                                <div class="col-md-8">
                                    <input type="text" value="{{ auth()->user()->userDetail->nid }}" name="nid" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" class="form-control" id="" cols="30" rows="10">{{ auth()->user()->userDetail->address }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                    @if(isset(auth()->user()->userDetail->image))
                                        <img src="{{ auth()->user()->userDetail->image }}" alt="" style="height: 90px; width: 90px;">
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Update Profile">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
