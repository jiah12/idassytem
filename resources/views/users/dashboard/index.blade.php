@extends('layouts.users.index')

@section('content')
<div class="container py-3">
    <h2 class="fw-bold mb-2">👋 Welcome to User Dashboard</h2>

    {{-- Dashboard Cards --}}
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-success text-white">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-shield-lock-fill fs-1"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle mb-1">Admins</h6>
                        <h3 class="fw-bold mb-0">{{ $adminCount ?? '0' }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-info text-white">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle mb-1">Normal Users</h6>
                        <h3 class="fw-bold mb-0">{{ $userCount ?? '0' }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- User Table --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="card-title mb-1">Recent Users</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
</div>
@endsection
