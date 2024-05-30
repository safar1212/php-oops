<?php
// To check if the class exists = class_exists();
// To check if the interface exists  interface_exists();

// To check if the method exists = method_exists();

// To check if the trait exists = trait_exists();

// To check if the property exists = property_exists();

// To check if the object exists = is_a();

// To check if the perticuler is the subclass of = is_subclass_of();
 class abc{

 }
 if(class_exists("abc")){
 echo "this class exists";
 } else{
 echo "the class doesn't exist";
 }
 echo "<br>";

 class abc1{
    public function myMethod(){
        
    }
 }
 $obj1 = new abc1();
 if(method_exists($obj1, 'myMethod')){
    echo "This method exists";
 } else {
    echo "this method doesn't exist";
 }
 echo "<br>";

 class abc2{

 }
 $obj3 = new abc2;
 if(is_a($obj3, 'abc2')){
    echo "this object is concerned with this class";
 }

?>