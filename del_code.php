<?php
$rno=$_POST['rno'];

include("student.php");
$s = new Student();

$n = $s->delete($rno);
print " <h1> $n Record deleted </h1>";

?>

<a href="displaydata.php"> Back to list </a>