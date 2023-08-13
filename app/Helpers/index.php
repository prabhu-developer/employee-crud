<?php

use App\Models\BloodGroup;
use App\Models\Departments;
use App\Models\Gender;
use App\Models\Religion;
use Illuminate\Support\Facades\Storage;

if (!function_exists('emp_status')) {
    function emp_status($is_active)
    {
        if ($is_active) {
            return '<span class="badge bg-success">Active</span>';
        }
        return '<span class="badge bg-danger">In-active</span>';
    }
}

if (!function_exists('emp_code')) {
    function emp_code($employee_id)
    {
        return config('app.emp_code_prefix') . $employee_id;
    }
}

if (!function_exists('emp_image')) {
    function emp_image($avatar,$class=null)
    {
        if (is_null($avatar) && !(Storage::exists($avatar))) {
            $no_image = asset('images/no-user-image.jpg');
            return "<img src='$no_image' class='$class' />";
        }
        $avatar = asset('/storage/app/public/'.$avatar);
        return "<img src='$avatar' class='$class' />";
    }
}



if (!function_exists('genders')) {
    function genders()
    {
        return  Gender::where('is_active',true)->pluck('name', 'id')->toArray();
    }
}

if (!function_exists('departments')) {
    function departments()
    {
        return Departments::where('is_active',true)->pluck('name', 'id')->toArray();
    }
}

if (!function_exists('blood_groups')) {
    function blood_groups()
    {
        return BloodGroup::where('is_active',true)->pluck('name', 'id')->toArray();
    }
}


if (!function_exists('religion')) {
    function religion()
    {
        return Religion::where('is_active',true)->pluck('name', 'id')->toArray();
    }
}


