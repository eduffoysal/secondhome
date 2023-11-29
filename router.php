<?php
class Router{

    private $SERVER_URIS = [];
    private $SERVER_METHOD = '';

    private $matched = false;
    private $callback;

    private $trim = '/\^$';

    function __construct(){
        $URI = trim($_SERVER['REQUEST_URI'],'/\^$');
        $this->SERVER_METHOD = strtolower($_SERVER['REQUEST_METHOD']);
        $this->SERVER_URIS = explode('/',$URI);
        // print_r($this->SERVER_URIS);
    }

    function add($method, $uri, $callback){
        if($this->matched){
            return;
        }
        if(strtolower($method) != $this->SERVER_METHOD){
            return;
        }

        $uri = trim($uri,$this->trim);
        $uris = explode('/',$uri);

        // print_r($uris);

        if(count($uris) != count($this->SERVER_URIS)){
            return;
        }

        $matched = true;
        for($i=0; $i<count($uris); $i++){
            if($uris[$i] == $this->SERVER_URIS){
                continue;
            }
            $matched = false;
            break;
        }

        if($matched){
            $this->matched = true;
            $this->callback = $callback;
        }

    }

    function listen(){
        if(!$this->matched){
            echo "404 Error";
            return;
        }
        call_user_func($this->callback);
    }

}

?>