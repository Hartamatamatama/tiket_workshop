<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('is_active')) {
    function is_active($path)
    {
        return Request::is($path) ? 'font-bold text-blue-400' : '';
    }
}
?>