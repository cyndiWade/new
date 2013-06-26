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

