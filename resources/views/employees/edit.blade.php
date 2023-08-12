@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-white">
            <div class="card-header fw-bold">
                Edit an employee
            </div>
            <div class="card-body">
                {!! Form::model($employee, [
                    'enctype' => 'multipart/form-data',
                    'route' => ['employee.update', $employee->id],
                    'class' => 'row align-items-end',
                ]) !!}
                @method('PUT')
                @include('employees.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
