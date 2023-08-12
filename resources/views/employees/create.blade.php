@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-white">
            <div class="card-header fw-bold">
                Create an employee
            </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'employee.store', 'class' => 'row align-items-end']) !!}
                    @include('employees.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
