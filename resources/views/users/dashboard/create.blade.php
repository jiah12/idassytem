@extends('layouts.admin.index')

@section('content')
<div class="container">
    <h2>Add New User</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input name="password" type="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-select" required>
                <option value="Admin">Admin</option>
                <option value="Viewer">Viewer</option>
            </select>
        </div>
        <button class="btn btn-success">Create User</button>
    </form>
</div>
@endsection
