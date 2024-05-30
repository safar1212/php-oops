<?php
namespace myNameSpace;

echo "Line Number: " . __LINE__;
echo "<br>";
echo "The complete path of this file: " . __FILE__;
echo "<br>";
echo "The complete path of this directory is :" . __DIR__;
echo "<br>";
function abc(){
    echo "The Function name is: " . __FUNCTION__;
}
abc();
echo "<br>";
class studentClass{
    public function getClassName(){
        return "The name of this class is : " . __CLASS__;
    }

}
$obj = new studentClass();
echo $obj->getClassName();
echo "<br>";

class studentClass1{
    public function getMethodName(){
        return "The name of this class is : " . __METHOD__;
    }

}
$obj1 = new studentClass1();
echo $obj1->getMethodName();
echo "<br>";
class getNameSpace{
    public function getMethodName1(){
        return "The name of this namespace is : " . __NAMESPACE__;
    }

}
$obj1 = new getNameSpace();
echo $obj1->getMethodName1();
echo "<br>";

trait myTrait{
    public function getTraitName(){
        return "The name of this trait is : " . __TRAIT__;
    }
}
class gettingTraitName{
    use myTrait;
}

$obj2 = new gettingTraitName();
echo $obj2->getTraitName();

?>