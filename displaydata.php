<!-- display data -->
<html>
<body>

<?php
include("student.php");
$s = new Student();
$result=$s->display();
?>

<table width="50%" border="1">
<tr> 
<th> Name </th> <th> Course </th> <th> Fees </th> <th> Action </th>
</tr>

<?php
while($rec=mysqli_fetch_array($result))
{
?>

<tr>
<td> <?php print $rec['name'] ?> </td>
<td> <?php print $rec['course'] ?> </td>
<td> <?php print $rec['fees'] ?> </td>
<td> 
<a href="update.php?rno=<?php print $rec['rno']?>">Edit </a>  ||
<a href="del.php?rno=<?php print $rec['rno']?>"> Delete </a>

</td>
</tr>

<?php
}
?>


</body>
</html>