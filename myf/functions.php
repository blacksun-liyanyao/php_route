<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/25 0025
 * Time: 12:13
 */

function getPathInfo(){
    $pathinfo = $_SERVER['PATH_INFO'];
    if(!$pathinfo || !isset($pathinfo)){
        $pathinfo = '/app/index/index';
    }
    else{
        $pathinfo = APP.$pathinfo;
    }
    $arr = explode('/',$pathinfo);
    $route['c'] = $arr[2];
    $route['a'] = $arr[3];
    return $route;
}