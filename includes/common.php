<?php
	session_start();
	header('Cache-control: private'); // IE 6 FIX
	 
	if(isSet($_GET['lang'])) {
		$lang = $_GET['lang'];
	 
		// register the session and set the cookie
		$_SESSION['lang'] = $lang;
	 
		setcookie('lang', $lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang'])) {
		$lang = $_SESSION['lang'];
	}
	else if(isSet($_COOKIE['lang'])) {
		$lang = $_COOKIE['lang'];
	}
	else {
		$lang = 'it';
	}
	 
	switch ($lang) {
	  case 'it':
	  $lang_file = 'db.it.php';
	  break;
	 
	  case 'th':
	  $lang_file = 'db.th.php';
	  break;
	
	  default:
	  $lang_file = 'db.it.php';
	 
	}
	 
	include_once 'includes/'.$lang_file;
	
?>