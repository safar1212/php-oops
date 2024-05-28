<?php
class abc{
private $name;

function __set($prop, $value){
echo "the property you want to set value to is private or doesn't exist : $prop";
}
}
$test = new abc();
$test->name = "zafar";
echo "<br>";
echo "<br>";

class cd{
    private $school;
    public function show(){
        echo $this->school;
    }

    function __set($prop, $value){
        if(property_exists($this, $prop)){
            $this->$prop = $value;
        } else {
            echo "The property you want to assign value to doesn't exist
            or is a private property : $prop";
        }
    }
}
$test2 = new cd();
$test2->school = "Zafar's school";
$test2->show();
?>