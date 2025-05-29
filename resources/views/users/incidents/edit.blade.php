@extends('layouts.users.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">User /</span> Edit Profile
        </h4>

        <div class="card">
            <h5 class="card-header">Edit Profile</h5>
            <div class="card-body">
                <form action="{{ route('users.incidents.update', $incidents->id) }}" method="POST">
                     @csrf
                     @method('PUT')

                         <div class="mb-3">
                            <label for="fullname" class="form-label">Name</label>
                             <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $incidents->fullname }}" required></div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="int" class="form-control" id="age" name="age" value="{{ $incidents->age }}" required></div>

                         <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $incidents->address }}" required></div>
                        <div class="mb-3">
                        <label for="bod" class="form-label">BOD</label>
                        <input type="date" class="form-control" id="bod" name="bod" value="{{ $incidents->bod }}" required></div>
                        <div class="mb-3">
                        <label for="incidents" class="form-label">Address</label>
                        <input type="text" class="form-control" id="incidents" name="incidents" value="{{ $incidents->incidents }}" required></div>

                    <button type="submit" class="btn btn-primary">
                     <span class="bx bx-up-arrow-circle"></span> Update
                    </button>
                         <a href="{{ route('users.incidents.index') }}"class="btn btn-success mt-3" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>Cancel
                    </a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
