<?php
class abc{
private $data = ["name"=>"Zafar", "Age"=>27, "hobby"=>"coding"];

function __get($key){
 if(array_key_exists($key, $this->data)){
    return $this->data[$key];
 } else{
    return "This key . $key . doesn't exist";
 }
}
}

$test = new abc();
echo $test->name;
echo "<br>";
echo $test->hobby;
echo "<br>";
echo $test->color;
?>