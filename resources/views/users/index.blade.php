@extends('layouts.admin.index')

@section('content')
<div class="container">
    <h2 class="mb-4">Users</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="" class="btn btn-primary mb-3">Add New User</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Role</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->role }}</td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <form action="" method="POST" class="d-inline" onsubmit="return confirm('Delete this user?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
