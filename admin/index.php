<?php
require_once(dirname(__FILE__).'/init.php');

function GetSession($var)
{
	if (isset($_SESSION[md5($GLOBALS['ShopPath'])][$var])) {
		return $_SESSION[md5($GLOBALS['ShopPath'])][$var];
	} else {
		return null;
	}
}


function SetSession($var, $val)
{
	$_SESSION[md5($GLOBALS['ShopPath'])][$var] = $val;
}

function UnsetSession($var)
{
	unset($_SESSION[md5($GLOBALS['ShopPath'])][$var]);
}

// Internal ping system to maintain session login for long viewed pages (editing etc.)
if (isset($_GET['ping'])) {
	die("pong");
}

// The main page handling class
$GLOBALS['ISC_CLASS_ADMIN_ENGINE'] = GetClass('ISC_ADMIN_ENGINE');
$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->HandlePage();
