<?php

$f3=require('lib/base.php');
$f3->config('config/config.ini');
$f3->config('config/routes.ini');

/*
$f3->route('GET /',
    function($f3) {
        $f3->set('name','world');
        $template=new Template;
        echo Template::instance()->render('main.html');
    }
);*/

$f3->run();
?>