@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit User</h4>
                </div>
                <div class="card-body">
                    {{--                    @if($errors->any())--}}
                    {{--                        <ul>--}}
                    {{--                            @foreach($errors->all() as $error)--}}
                    {{--                                <li>{{ $error }}</li>--}}
                    {{--                            @endforeach--}}
                    {{--                        </ul>--}}
                    {{--                    @endif--}}
                    <div>
                        <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                    <span class="text-danger mt-2">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                                    <span class="text-danger mt-2">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Role</label>
                                <div class="col-md-8">
                                    <select name="access_label" class="form-control">
                                        <option value="2" {{ $user->access_label == 2 ? 'selected' : '' }}>Super Admin</option>
                                        <option value="1" {{ $user->access_label == 1 ? 'selected' : '' }}>Teacher</option>
                                        <option value="0" {{ $user->access_label == 0 ? 'selected' : '' }}>Student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Update User">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
