<?php
include "database.php";
$obj = new database();

// $obj->insert('students',['student_name'=>"Alee",'age'=>'25','city'=>'London']);
// echo "The following data is inserted in : ";
// print_r($obj->getResult());
// $obj->update('students',['student_name'=>"Hussain Ali",'age'=>'28','city'=>'London'], 'id="11"');
// echo "The following data is updated in : ";
// print_r($obj->getResult());
// $obj->delete('students', 'id="9"');
// echo "The following data is updated in : ";
// print_r($obj->getResult());
// $obj->sql('SELECT * FROM students WHERE student_name LIKE "%Rimsha%"');
// echo "SQL result is : ";
// print_r($obj->getResult());
$columnName = "students.id,students.student_name,citydb.cname";
$join = "citydb ON students.cid = citydb.cid";
$obj->select('students',$columnName,$join,null,null,2);
echo "<br>";
echo " SQL result is : ";
print_r($obj->getResult());

echo "<br>";
echo "<br>";

$obj->pagination('students',$join,null,2);

echo "<br>";
echo "<br>";
?>
