@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">IDAS /</span> View User Details
        </h4>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-4">User Details</h5>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $manageuser->fullname }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $manageuser->email }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $manageuser->address }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('manageuser.index') }}" class="btn btn-secondary mt-3">
                    <i class="bx bx-arrow-back"></i> Back to List
                </a>

            </div>
        </div>

    </div>
</div>
@endsection
