<?php
    spl_autoload_register(function ($class) {
        include $class . '.php';
        // echo $class;
    }); 
    // print_r($_SERVER);

    $router = new Router();

    $router->add('get','/edu/user',function(){
        echo " hellow from callback";
    });
    
    $router->listen();

?>