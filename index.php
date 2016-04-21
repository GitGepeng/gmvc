<?php
//此文件为单一入口文件
require_once './gtemp/function/core.php';
define('IN_GTEMP', true);
isset($_GET['m'])?$m=$_GET['m']:$m='index';
$GTEMPapp='source';//定义应用名称
if (!is_dir($GTEMPapp)) {
	GTEMPfirstcreat($GTEMPapp);
}
$GTEMP=$m.'.htm';
$GTEMP_CACHING=FALSE;
if(!is_file($m='./'.$GTEMPapp.'/controller/'.$m.'.php')){
	exit('<h1>Error 404:Can\'t Find The Web On The Internet Server</h1>');
}
require_once $m;
require_once './gtemp/function.php';

?>