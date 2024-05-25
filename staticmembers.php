<?php

class base{

static $name = "Zafar";

static function show(){
 echo self::$name;
}

}

echo base::$name;
echo "<br>";
// no need to start an object for static members
 base::show();


?>