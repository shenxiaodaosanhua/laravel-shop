<?php
/**
 * Created by PhpStorm.
 * User: jerry
 * Date: 2018/6/29
 * Time: 上午12:25
 */


if (! function_exists('route_class')) {
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}