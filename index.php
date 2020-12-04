<?php

    ini_set('display_errors','On');
   

    require __DIR__.'/vendor/autoload.php';
    
    use App\App;
    $uri=$_SERVER['REQUEST_URI'];
    define('URI',$uri);
    $conf=App::init();
    define('BASE',$conf['web']);
   

    App::run();
    