@extends('backend.admin.layouts.index')

@section('contents')
    <div class="row justify-content-center">
        <div class="col-9 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ADD BRANCH</h4><br>

                    <form action="{{ route('branch.store') }}" class="custom-validation" method="POST">
                        @csrf
                        <div class=" row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Branch Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="name" name="b_name"
                                    placeholder="Type Branch name">
                            </div>
                        </div>

                        <div class=" row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" required parsley-type="email"
                                    name="b_email" placeholder="Enter a valid e-mail" />
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone" required parsley-type="phone"
                                    name="b_phone" placeholder="Enter a valid phone number" />
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-lg mb-3" name="location_id"
                                aria-label=".form-select-lg example">
                                <option>Choose Location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->province }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class=" row mb-3">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Status: </strong><br />
                                    <select class="form-select form-select-lg mb-3" name="status"
                                        aria-label=".form-select-lg example"  style="width: 300px">
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0 float-end">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                    Submit
                                </button>
                                <a class="btn btn-secondary " href="{{ route('branch.index') }}"> Back</a>
                                {{-- <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Back</a> --}}

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    @endsection
