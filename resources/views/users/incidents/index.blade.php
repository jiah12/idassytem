@extends('layouts.users.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">IDAS /</span> List of Users
        </h4>

        <div class="card shadow-sm">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title mb-0">User Table</h5>
                    <a href="{{ route('incidents.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Add User
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @forelse($incidents as $incident)
                        <tr>
                            <td>{{ $incidents->fullname }}</td>
                            <td>{{ $incidents->email }}</td>
                            <td>{{ $incidents->address }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <!-- Edit Button -->
                                    <a href="{{ route('manageuser.edit', $manageuser->id) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <span class="bx bx-edit btn btn-primary"> Edit</span></a>

                                    <!-- View Button (icon only) -->
                                    <a href="{{ route('manageuser.show', $manageuser->id) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="View">
                                    <span class="bx bx-view btn btn-success"> View</span></a>


                                    <!-- Delete Form -->
                                       <form action="{{ route('manageuser.destroy', $manageuser->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure you want to delete this user?')" data-toggle="tooltip" title="Delete">
                                          <span class="bx bx-trash btn btn-danger"> Delete</span>
                                    </button>
                                        </form>

                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No User found.</td>
                        </tr>
                        @endforelse
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
