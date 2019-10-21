<?php 
	require("vendor/autoload.php");
	$openapi = \OpenApi\scan('test');
	header('Content-Type: application/x-yaml');
	echo $openapi->toYaml();
?>