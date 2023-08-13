<?php

use App\Models\BloodGroup;
use App\Models\Departments;
use App\Models\Gender;
use App\Models\Religion;
use Illuminate\Support\Facades\Storage;

if (!function_exists('format_date')) {
    function format_date($date, $format = 'Y-m-d')
    {
        return date($format, strtotime($date));
    }
}


if (!function_exists('has_image')) {
    function has_image($avatar,$class=null)
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


