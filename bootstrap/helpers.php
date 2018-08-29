<?php
/**
 * Created by PhpStorm.
 * User: zhangbaiyu
 * Date: 2018/8/29
 * Time: 下午2:36
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}