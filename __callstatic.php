<?php

use function PHPSTORM_META\argumentsSet;

class abc{
    private static function show(){
        echo "This eco is from static show method";
    }

    public static function __callStatic($method, $arguments)
    {
        echo "The method you're tring to access is a private static method";
    }
}
abc::show();
echo "<br>";
echo "<br>";

class cd{
    private static function hello($name){
        echo "Hello " . " " . $name;
    }

    public static function __callStatic($method, $arguments)
    {
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__class__, $method], $arguments);
        } else {
              echo "The method doesn't axist";
        }
    }
}
cd::hello("Zafar");
?>