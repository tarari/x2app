<?php

    ini_set('display_errors','On');
   

    require __DIR__.'/vendor/autoload.php';

    use App\App;
    // cargar entorno de configuracion
   // App::init();

    App::run();
    