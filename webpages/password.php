<?php
	$username='iit2015143';
	$pwrd='123456';
	if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER']!= $username || $_SERVER['PHP_AUTH_PW']!= $pwrd){
		header('HTTP/1.1 401 Unauthorised');
		header('WWW-Authenticate: Basic realm="photobin"');
		exit('<h2>PhotobinAdmin</h2>Please get ur ass out of here you are not authorised.');
	}
?>