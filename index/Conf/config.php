<?php
if (!defined('THINK_PATH'))	exit();

$config = require("config.inc.php");
$array=array(
	'URL_MODEL'=>'0',
	'DEFAULT_LANG' => 'zh-cn',
	'TMPL_PARSE_STRING' => array(
		'__IMAGES__' => 'data/uploads/',
	),
);
$config=array_merge($config,$array);
return $config;
