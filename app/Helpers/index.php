<?php

use App\Models\BloodGroup;
use App\Models\Departments;
use App\Models\Gender;
use App\Models\Religion;

if (!function_exists('format_date')) {
    function format_date($date, $format = 'Y-m-d')
    {
        return date($format, strtotime($date));
    }
}


if (!function_exists('has_image')) {
    function has_image($avatar,$class=null)
    {
        if (is_null($avatar)) {
            $no_image = asset('images/no-user-image.jpg');
            
            return "<img src='$no_image' class='$class' />";
        }
        return "<img src='$avatar' class='$class' />";
    }
}

if (!function_exists('genders')) {
    function genders()
    {
        return  Gender::pluck('name', 'id')->toArray();
    }
}

if (!function_exists('departments')) {
    function departments()
    {
        return Departments::pluck('name', 'id')->toArray();
    }
}

if (!function_exists('blood_groups')) {
    function blood_groups()
    {
        return BloodGroup::pluck('name', 'id')->toArray();
    }
}


if (!function_exists('religion')) {
    function religion()
    {
        return Religion::pluck('name', 'id')->toArray();
    }
}


