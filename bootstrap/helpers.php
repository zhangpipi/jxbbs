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