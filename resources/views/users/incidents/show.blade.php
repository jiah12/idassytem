@extends('layouts.users.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">IDAS /</span> Incident Details
        </h4>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5>{{ $incident->fullname }}</h5>
                <p><strong>Age:</strong> {{ $incident->age }}</p>
                <p><strong>Address:</strong> {{ $incident->address }}</p>
                <p><strong>Birthdate:</strong> {{ \Carbon\Carbon::parse($incident->bod)->format('M d, Y') }}</p>
                <p><strong>Incident:</strong> {{ $incident->incidents }}</p>

                <a href="{{ route('users.incidents.index') }}" class="btn btn-secondary mt-3">Back to List</a>
            </div>
        </div>

    </div>
</div>
@endsection
