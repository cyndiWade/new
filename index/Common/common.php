<?php

$langSet = C('DEFAULT_LANG');
if (is_file(LANG_PATH . $langSet . '/common.php')) {
	L(include LANG_PATH . $langSet . '/common.php');
}

function curPageURL()
{
	$pageURL = 'http';

	if ($_SERVER["HTTPS"] == "on")
	{
		$pageURL .= "s";
	}
	$pageURL .= "://";

	if ($_SERVER["SERVER_PORT"] != "80")
	{
		$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
	}
	else
	{
		$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

/**
 * 5.把HTML标签转换为字符串
 * @param Array、Object、Str  $_date
 * @return Array、Object、Str
 */
function htmlString ($_date) {
	if (is_array($_date)) {
		foreach ($_date as $_key => $_value) {
			$_string[$_key] =  htmlString($_value);
		}
	} else if (is_object($_date)) {
		foreach ($_date as $_key => $_value) {
			$_string->$_key =  htmlString($_value);
		}
	} else {
		$_string = htmlspecialchars($_date);
	}
	return $_string;//传入的是对象，返回对象、是数组，返回数组、是字符串则返回字符串
}


