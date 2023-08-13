@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <div class="card bg-white">
            <div class="card-header fw-bold">
                Show an employee
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 text-center">
                        {!! has_image($employee->avatar, 'rounded-pill w-100 shadow-sm border') !!}
                        <div class="lead mt-2">{{ $employee->name }}</div>
                    </div>
                    <div class="col">
                        <ul class="list-group mb-3">
                            <li class="list-group-item">
                                <b>Emp ID</b>
                                <span class="float-end">{{ emp_code($employee->id) }}1</span>
                            </li>
                            <li class="list-group-item">
                                <b>Department</b>
                                <span class="float-end">{{ $employee->department->name }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Designation</b>
                                <span class="float-end">{{ $employee->designation }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Mobile</b>
                                <span class="float-end">{{ $employee->mobile }}</span>
                            </li> <!---->
                            <li class="list-group-item">
                                <b>Salary</b>
                                <span class="float-end">{{ $employee->salary }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b>
                                <span class="float-end">{{ $employee->gender->name }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Blood Group</b>
                                <span class="float-end">{{ $employee->bloodGroup->name }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Religion</b>
                                <span class="float-end">{{ $employee->religion->name }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Birth Date</b>
                                <span class="float-end">{{ $employee->birth_date }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Join Date</b>
                                <span class="float-end">{{ $employee->join_date }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Appointment Date</b>
                                <span class="float-end">{{ $employee->appointment_date }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b>
                                <span class="float-end">{{ $employee->address }}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Status</b>
                                <span class="float-end">{!! emp_status($employee->is_active) !!}</span>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
