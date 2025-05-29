@extends('layouts.users.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">IDAS /</span> List of Reports
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
                    <h5 class="card-title mb-0">Reports Table</h5>
                    <a href="{{ route('users.incidents.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Add Incidents
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Birthdate</th>
                                <th>Incidents</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @forelse($incidents as $incident)
                        <tr>
                            <td>{{ $incident->fullname }}</td>
                            <td>{{ $incident->age }}</td>
                            <td>{{ $incident->address }}</td>
                            <td>{{ $incident->bod }}</td>
                            <td>{{ $incident->incidents }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <!-- Edit Button -->
                                    <a href="{{ route('users.incidents.edit', $incident->id) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <span class="bx bx-edit btn btn-primary"> Edit</span></a>

                                    <!-- View Button (icon only) -->
                                    <a href="{{ route('users.incidents.show', $incident->id) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="View">
                                    <span class="bx bx-view btn btn-success"> View</span></a>


                                    <!-- Delete Form -->
                                       <form action="{{ route('users.incidents.destroy', $incident->id) }}" method="POST" style="display:inline;">
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
