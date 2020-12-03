<?php

    ini_set('display_errors','On');
   

    require __DIR__.'/vendor/autoload.php';
    define('BASE',
    (dirname($_SERVER['SCRIPT_NAME'])).'/');
    
    use App\App;
   
   // App::init();
   

    App::run();
    