<?php

namespace App\Http\Controllers;

use App\Helpers\FileSystem;
use App\Models\Employees;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class EmployeesController extends Controller
{
    use FileSystem;
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
            $employees = $this->modal->with(['department'])->select([
                'id',
                'name',
                'department_id',
                'designation',
                'mobile',
                'salary',
                'birth_date',
                'appointment_date',
                'join_date',
                'avatar',
                'is_active'
            ]);
            return $this->datatable($employees);
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
        if(!$request->has('is_active')) {
            $request['is_active'] = 0;
        }
        $employee = $this->updateOrCreate($request->except(['_token', 'avatar']));
        if ($request->has('avatar')) {
            $path = $this->putFiles($request->avatar);
            $employee->update(['avatar' => $path]);
        }
        return  redirect(route('employee.index'))->withSuccess('Employee Created!');
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
        if(!$request->has('is_active')) {
            $request['is_active'] = 0;
        }
        $employee = $this->updateOrCreate($request->except(['_token', 'avatar','_method']), $id);
        if ($request->has('avatar')) {
            $path = $this->putFiles($request->avatar);
            $employee->update(['avatar' => $path]);
        }
        return  redirect(route('employee.index'))->withSuccess('Employee Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->modal->findOrFail($id);
        if(!is_null($employee) & Storage::exists($employee->avatar)) {
            Storage::delete($employee->avatar);
        }
        $employee->delete();
        return response([
            'status' => true,
            'message' =>'Employee Deleted!'
        ], 200);
    }

    public function updateOrCreate($request, $id=null)
    {
        return $this->modal->updateOrCreate(['id' => $id], $request);
    }

    public function datatable($employees)
    {
        return DataTables::of($employees)
            ->addIndexColumn()
            ->editColumn('avatar', function ($employee) {
                return has_image($employee->avatar, 'rounded-pill w-40px shadow-sm border');
            })
            ->editColumn('is_active', function ($employee) {
                if ($employee->is_active) {
                    return '<span class="badge bg-success">Active</span>';
                }
                return '<span class="badge bg-danger">In-active</span>';
            })
            ->addColumn('emp_code', function ($employee) {
                return "EMP" . $employee->id;
            })
            ->addColumn('action', function ($employee) {
                return view('employees.actions', compact('employee'));
            })
            ->rawColumns(['action', 'emp_code', 'avatar', 'is_active'])
            ->make(true);
    }
}
