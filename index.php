<?php
    error_reporting(E_ALL);

    header('Content-Type: text/html; charset=utf-8');
    
    //  System
    $core = 'core';
    
    //  Controllers
    $contollers = 'app/Controllers';
    
    //  Models
    $models = 'app/Models';
    
    //  Views
    $views = 'app/Views';
    
    define('SYSPATH', str_replace('\\', '/', __DIR__)); 
    define('CORE_PATH', SYSPATH .'/'. $core .'/'); 
    define('CONTR_PATH', SYSPATH .'/'. $contollers .'/'); 
    define('MODEL_PATH', SYSPATH .'/'. $models .'/'); 
    define('VIEWS_PATH', SYSPATH .'/'. $views .'/'); 
    
    require_once CORE_PATH .'/main.php';
    require_once CORE_PATH .'/route.php';
    
    Route::run();