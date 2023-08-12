<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use DataTables;

class EmployeesController extends Controller
{
    protected $modal;

    public function __construct(Employees $modal)
    {
        $this->modal = $modal;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->employees_datatable($request);
        }
        return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->modal->findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function employees_datatable($request)
    {
        $employees = $this->modal->with(['department'])->select('*');
        return DataTables::of($employees)
            ->addIndexColumn()
            ->editColumn('avatar', function ($employee) { 
                return has_image($employee->avatar,'rounded-pill w-100');
            })
            ->editColumn('is_active', function ($employee) { 
                if($employee->is_active) {
                    return '<span class="badge bg-success">Active</span>';
                }
                return '<span class="badge bg-danger">In-active</span>';
            })
            ->addColumn('emp_code', function ($employee) {
                return "EMP".$employee->id;
            })
            ->addColumn('action', function ($employee) {
                return view('employees.actions', compact('employee'));
            })
            ->rawColumns(['action','emp_code','avatar','is_active'])
            ->make(true);
    }
}
