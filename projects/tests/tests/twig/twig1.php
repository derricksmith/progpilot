<?php

$var_main = array(
		'TEST1'=>'test1',
		'TEST2'=>'test2',
		'TEST3'=>'test3'
		);

$loader = new Twig_Loader_Filesystem('./templates');

$twig = new Twig_Environment($loader, array('autoescape' => false));

echo $twig->render('new/header.html', $var_main);

?>
