@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Admin /</span> Edit Profile
        </h4>

        <div class="card">
            <h5 class="card-header">Edit Profile</h5>
            <div class="card-body">
                <form action="{{ route('manageuser.update', $manageuser->id) }}" method="POST">
                     @csrf
                     @method('PUT')

                         <div class="mb-3">
                            <label for="fullname" class="form-label">Name</label>
                             <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $manageuser->fullname }}" required></div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $manageuser->email }}" required></div>

                         <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $manageuser->address }}" required></div>

                    <button type="submit" class="btn btn-primary">
                     <span class="bx bx-up-arrow-circle"></span> Update
                    </button>
                         <a href="{{ route('manageuser.index') }}"class="btn btn-success mt-3" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>Cancel
                    </a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
