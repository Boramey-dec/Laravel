@extends('backend.admin.layout.index')

@section('content')
    <div class="container-xl">
        <div class="card">

            <div class="card-body">
                <h3><b>Add Employee</b></h3>
                {{-- <button type="button" class="close" aria-label="close">
                </button> --}}
            </div>
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf


                <div class="form-group row">
                    <label for="firstName" class="col-sm-6 col-form-label">First Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="firstname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastName" class="col-sm-6 col-form-label">Last Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lastname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-6 col-form-label">E-mail</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-6 col-form-label">Phone Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-6 col-form-label">Gender</label>
                    <div class="col-sm-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dob" class="col-sm-6 col-form-label">Date Of Birth</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="dob">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pob" class="col-sm-6 col-form-label">Place Of Birth</label>
                    <div class="col-sm-6">
                        <input type="textarea" class="form-control" name="pob">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-6 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="textarea" class="form-control" name="address">
                    </div>
                </div>

        </div>

        <div class="">
            <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
    </div>
    {{-- <h1>Welcome!</h1> --}}
@endsection
