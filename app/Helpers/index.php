<?php


if (!function_exists('format_date')) {
    function format_date($date, $format = 'Y-m-d')
    {
        return date($format, strtotime($date));
    }
}


if (!function_exists('has_image')) {
    function has_image($avatar)
    {
        if (is_null($avatar)) {
            $no_image = asset('images/no-user-image.jpg');
            
            return "<img src='$no_image' class='w-50 rounded-pill' />";
        }
        return "<img src='$avatar' class='w-50 rounded-pill' />";
    }
}
