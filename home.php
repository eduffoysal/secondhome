<?php
    spl_autoload_register(function ($class) {
        include $class . '.php';
        // echo $class;
    });
    // print_r($_SERVER);

    $router = new Router();

    $router->get('/edu/id/:id',function($params){
        echo $params['id'];
    });
    $router->get('/edu/id/:id/:me',function($params){
        echo $params['me'];
    });

    // $router->get('/edu/id/:id/:me',function($params){
    //     echo $params['me'];
    // });

    $router->get('/edu/profile/:phone',function($params){
        echo $params['phone'];
    });

    $router->listen();

?>