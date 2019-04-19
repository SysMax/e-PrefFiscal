<?php

require_once './vendor/autoload.php';

$app = new Slim\Slim();

$app->config('debug', TRUE);

$app->get('/', function (){
    
    $page = new SysMax\Page();
    
    $page->setTpl('index');
    
});

$app->run();