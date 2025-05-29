@extends('layouts.users.index')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="card-header">
            <h2>Add Incidents</h2>
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
                <form action="{{ route('users.incidents.create') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="fullname">Name</label>
                        <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" placeholder="Fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="int" class="form-control" name="age" value="{{ old('age') }}" placeholder="Age" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="address" class="form-control" name="address" value="{{ old('address') }}" placeholder="address" required>
                    </div>
                    <div class="form-group">
                        <label for="bod">Birthdate</label>
                        <input type="date" class="form-control" name="bod" value="{{ old('bod') }}" placeholder="bod" required>
                    </div>
                    <div class="form-group">
                        <label for="incidents">Incidents</label>
                        <input type="incidents" class="form-control" name="incidents" value="{{ old('incidents') }}" placeholder="type of incidents" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" data-toggle="tooltip" data-placement="top" title="Submit" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span>Add</button>

                    <a href="{{ route('users.incidents.index') }}"class="btn btn-success mt-3" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>Cancel
                    </a>
                </form>
            </div>
        </div>   
    </div>
</div>
@endsection
