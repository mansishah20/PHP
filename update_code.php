<?php
$rno=$_POST['rno'];
$name=$_POST['name'];
$course=$_POST['course'];
$fees=$_POST['fees'];

include("student.php");
$s = new Student();

$n = $s->update($rno,$name,$course,$fees);

print " <h1> $n Record updated </h1>";


?>

<a href="displaydata.php"> Back to list </a>
