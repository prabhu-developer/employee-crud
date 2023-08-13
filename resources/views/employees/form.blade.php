<div class="col-md-4 py-1">
    {!! Form::label('employee-name', 'Employee Name', ['class' => 'text-secondary']) !!}
    {!! Form::text('name', $employee->name ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('mobile', 'Mobile', ['class' => 'text-secondary']) !!}
    {!! Form::number('mobile', $employee->mobile ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('gender', 'Gender', ['class' => 'text-secondary']) !!}
    {!! Form::select('gender_id', ['' => 'Select an option'] + genders(), $employee->gender_id ?? null, [
        'class' => 'form-select',
        'required',
    ]) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('blood_group', 'Blood group', ['class' => 'text-secondary']) !!}
    {!! Form::select('blood_group_id', ['' => 'Select an option'] + blood_groups(), $employee->blood_group_id ?? null, [
        'class' => 'form-select',
        'required',
    ]) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('religion', 'Religion', ['class' => 'text-secondary']) !!}
    {!! Form::select('religion_id', ['' => 'Select an option'] + religion(), $employee->religion_id ?? null, [
        'class' => 'form-select',
        'required',
    ]) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('department', 'Department', ['class' => 'text-secondary']) !!}
    {!! Form::select('department_id', ['' => 'Select an option'] + departments(), $employee->department_id ?? null, [
        'class' => 'form-select',
        'required',
    ]) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('designation', 'Designation', ['class' => 'text-secondary']) !!}
    {!! Form::text('designation', $employee->designation ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('salary', 'Salary', ['class' => 'text-secondary']) !!}
    {!! Form::number('salary', $employee->salary ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('birth_date', 'Birth Date', ['class' => 'text-secondary']) !!}
    {!! Form::date('birth_date', $employee->birth_date ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('appointment_date', 'Birth Date', ['class' => 'text-secondary']) !!}
    {!! Form::date('appointment_date', $employee->appointment_date ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('join_date', 'Join Date', ['class' => 'text-secondary']) !!}
    {!! Form::date('join_date', $employee->join_date ?? null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="col-md-4 py-1">
    {!! Form::label('avatar', 'Profile', ['class' => 'text-secondary']) !!}
    <div class="d-flex">
        {!! emp_image($employee->avatar ?? null, 'rounded-pill w-40px me-2') !!}
        {!! Form::file('avatar', ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-md-8 py-1">
    {!! Form::label('address', 'Address', ['class' => 'text-secondary']) !!}
    {!! Form::text('address', $employee->address ?? null, ['class' => 'form-control', 'required', 'rows' => 3]) !!}
</div>
<div class="col-md-4">
    <div class="d-flex align-items-center justify-content-end">
        <div class="form-check form-switch me-3">
            <input class="form-check-input" name="is_active" {{ ($employee->is_active ?? null) ? 'checked' : '' }}  value="1" type="checkbox" role="switch"
                id="employeeCheckBox">
            <label class="form-check-label" for="employeeCheckBox"> Status </label>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</div>