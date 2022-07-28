@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive table-bordered w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Role</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->userDetail->phone }}</td>
                        <td>
                            <img src="{{ asset($user->userDetail->image) }}" alt="" style="height: 80px; width: 80px;">
                        </td>
                        <td>
                            {{ $user->access_label == 0 ? 'Student' : '' }}
                            {{ $user->access_label == 1 ? 'Teacher' : '' }}
                            {{ $user->access_label == 2 ? 'Admin' : '' }}
                        </td>
                        <td>{{ $user->userDetail->address }}</td>
                        <td>{{ $user->userDetail->status == 1 ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('users.change-status', ['id' => $user->id]) }}" class="btn btn-secondary">status</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure?')">
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
@endsection
