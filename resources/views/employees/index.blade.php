@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="container">
        <div class="card bg-white">
            <div class="card-header fw-bold">
                Employees
                <a href="{{ route('employee.create') }}" class="btn btn-primary float-end"><i class="bi bi-plus me-1"></i>
                    Create</a>
            </div>
            <div class="card-body">
                <table class="table table-centered" id="employees-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Emp ID</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Mobile</th>
                            <th>Birth Date</th>
                            <th>Join Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            const employeeTable = $('#employees-table').DataTable({
                processing: true,
                serverSide: true,
                order: [[0, "desc"]],
                ajax: `{!! route('employee.index') !!}`,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id'
                    },
                    {
                        data: 'avatar',
                        name: 'avatar'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'emp_code',
                        name: 'emp_code'
                    },
                    {
                        data: 'department.name',
                        name: 'department_id'
                    },
                    {
                        data: 'designation',
                        name: 'designation'
                    },
                    {
                        data: 'salary',
                        name: 'salary'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'birth_date',
                        name: 'birth_date'
                    },
                    {
                        data: 'join_date',
                        name: 'join_date'
                    },
                    {
                        data: 'is_active',
                        name: 'is_active'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },

                ]
            });
            $('#employees-table').on('click', '.delete-button', function() {
                const buttonId = this.id;
                const url = this.attributes.url.value;
                Swal.fire({
                    title: "Are you sure!",
                    text: "you want to delete this item?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios({
                            method: "DELETE",
                            url:url,
                        }).then(function(response) {
                            if (response.data.status) {
                                $('#employees-table').DataTable().ajax.reload();
                                toastr.success(response.data.message)
                            } else {
                                toastr.error(response.data.message)
                            }
                        });
                    }
                })
            });

           
        });
    </script>
@endpush
