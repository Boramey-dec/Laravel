@extends('backend.admin.layout.index')

@section('content')
    <div class="container-xl">
        <div class="card">

            <div class="card-body">
                <h3><b>Edit Employee</b> <span> No. {{ $employee->id }}</span></h3>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="firstName" class="col-sm-6 col-form-label">First Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="firstname" value="{{ $employee->firstname }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastName" class="col-sm-6 col-form-label">Last Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lastname" value="{{ $employee->lastname }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-6 col-form-label">E-mail</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" value="{{ $employee->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-6 col-form-label">Phone Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" value="{{ $employee->phone }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-6 col-form-label" >Gender</label>

                    <div class="col-sm-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ $employee->gender=='Female' ? 'checked' : 'true' }}>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{  $employee->gender=='Male' ? 'checked' : 'true' }}>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other" {{ $employee->gender=='Other' ? 'checked' : 'true' }}>
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dob" class="col-sm-6 col-form-label">Date Of Birth</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="dob" value="{{ $employee->dob }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pob" class="col-sm-6 col-form-label">Place Of Birth</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="pob" value="">{{ $employee->pob }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-6 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="address" value="">{{ $employee->address }}</textarea>
                    </div>
                </div>

        </div>

        <div class="">
            <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
    </div>

@endsection
