<?php
error_reporting(E_ALL);
ini_set('max_execution_time', 0); 
require_once 'vendor/autoload.php';

$context = new \progpilot\Context;
$analyzer = new \progpilot\Analyzer;

$context->inputs->setFolder("/var/opt/dvwa");

$var = function($result) {
    echo "<pre>";
	var_dump($result);
	echo "</pre>";
};
$context->outputs->setOnAddResult($var);
$analyzer->run($context);
?>