<?php
class myClass{
    function name(){
        echo "Class name is : " . get_class($this) . "\n";
        echo "<br>";
    }
} 
$obj = new myClass();
$obj->name();
echo "Class name of this object is : " . get_class($obj);

// some additional methods for functions
// get_class
// get_parent_class
// get_class_methods
// get_class_vars
// get_object_vars
// get_called_class
// get_declared_classes
// get_declared_interfaces
// get_declared_traits
// get_alias









?>