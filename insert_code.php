<?php
$name=$_POST['name'];
$course=$_POST['course'];
$fees=$_POST['fees'];

include("student.php");
$s = new Student();
$s->insert($name,$course,$fees);
print " <h1> Record inserted </h1>";

?>