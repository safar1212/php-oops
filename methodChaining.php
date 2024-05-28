<?php
class abc{
function a(){
    echo "This line is from function A <br>";
    return $this;
}
function b(){
    echo "This line is from function B<br>";
    return $this;
}
function c(){
    echo "This line is from function C";
}
}
$test = new abc();
$test->a()->b()->c();
?>