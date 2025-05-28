@extends('layouts.users.index')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="card-header">
            <h2>Add New User</h2>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('manageuser.create') }}" method="post">
                  @csrf
                    <div class="form-group">
                        <label for="fullname">Name</label>
                        <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" placeholder="Fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="address" class="form-control" name="address" value="{{ old('address') }}" placeholder="address" required>
                    </div>
                     
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Passwword" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" data-toggle="tooltip" data-placement="top" title="Submit" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span>Add</button>

                    <a href="{{ route('manageuser.index') }}"class="btn btn-success mt-3" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>Cancel
                    </a>
                </form>
            </div>
        </div>   
    </div>
</div>
@endsection
