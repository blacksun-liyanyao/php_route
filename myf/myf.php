<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/25 0025
 * Time: 12:09
 */
//设置时区
date_default_timezone_set('PRC');
//项目跟路径
define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']));
//项目相对目录
define("SITE_PATH", dirname($_SERVER['SCRIPT_NAME']));
//定义类后缀
define('EXT','.class.php');
//项目目录
define('APP', './app');
//系统配置路径
define('APP_SYS_PATH', dirname(__FILE__));
define('APP_SITE_PATH', dirname(dirname(__FILE__)));
require_once(APP_SYS_PATH."/functions.php");
$route = getPathInfo();
$mvcControllerName = $route['c']."Controller";
$mvcAction = $route['a'];
$mvcControllerFile = APP.'/controller/'.$mvcControllerName.EXT;
if(file_exists($mvcControllerFile)){
    require_once $mvcControllerFile;
    $myfC = new $mvcControllerName();
    $myfC->{$mvcAction}();
}
