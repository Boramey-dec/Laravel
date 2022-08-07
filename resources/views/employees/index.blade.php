@extends('backend.admin.layout.index')


@section('content')

{{-- <script src="{{ asset('js/form.js')}}"></script> --}}
<script>

$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);

        }
    });

});

function delete1(){


    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    console.log(checkbox)
    if (!this.checked) {
        let elements = document.getElementById("selectAll").checked;
        {
            if(elements){
                // code here

            }else{

            }
        }
            console.log(elements)
    }



}

</script>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 color-1">
                            <h2 style="color:#fff">Manage <b>Employees</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a class="btn btn-success" href="{{ route('employees.create') }}"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                            {{-- @method('DELETE') --}}
                            <a class="btn btn-danger" onclick= delete1()  href="{{ route('employees.deleteAll', 0) }}"><i class="material-icons">&#xE15C;</i>
                                <span>Delete</span></a>
                                @csrf
                                @method('DELETE')
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($employees as $employee)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="{{ $employee->id }}">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->firstname }}</td>
                                <td>{{ $employee->lastname }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                        <div class="icon-flex1">
                                            <a href="#" class="view"><i class="material-icons"
                                                    title="View">&#xE417;</i></a>
                                            <a href="{{ route('employees.edit', $employee->id) }}" method="POST"
                                                class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>

                                            @csrf
                                            @method('DELETE')
                                            {{-- <a class="delete"><i class="material-icons"
                                                title="Delete">&#xE872;</i></a> --}}
                                            <button class="delete"><i class="material-icons" style="color:red"
                                                    title="Delete">&#xE872;</i></button>
                                        </div>


                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <!-- pagination -->
                <div class="clearfix">
                    {{-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> --}}
                    Showing {{ $employees->firstItem() }} to {{ $employees->lastItem() }}
                    of total {{ $employees->total() }} entries

                    <ul class="pagination">
                        <li class="page-item"><a href="{{ $employees->previousPageUrl() }}"
                                style="color:rgb(23, 51, 166)">Previous</a></li>
                        @for ($i = 1; $i <= $employees->lastPage(); $i++)
                            <!-- a Tag for another page -->
                            <li class="page-item"><a href="{{ $employees->url($i) }}">{{ $i }}</a></li>
                        @endfor
                        <li class="page-item"><a href="{{ $employees->nextPageUrl() }}" style="color:rgb(23, 51, 166)">Next
                        </li>
                    </ul>
                    {{-- {!! $employees->links() !!} --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Add & Edit Modal HTML -->
    {{-- <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('backend.admin.employees.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Employee_id</label>
                            <input type="text" class="form-control" name="ee_id">
                        </div>
                        <div class="form-group">
                            <label>first_name</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                        <div class="form-group">
                            <label>last_name</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="form-group">
                            <label>gender</label>
                            <input type="text" class="form-control" name="gender">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label>dob</label>
                            <input type="date" class="form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label>pob</label>
                            <input type="text" class="form-control" name="pob">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

