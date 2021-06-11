<?php
	$rno=$_POST['rno'];
	$con = mysqli_connect("localhost","root","","mansi");
	$query = "select * from student where rno=$rno";
	$result = mysqli_query($con,$query);
	
	if($rec=mysqli_fetch_array($result))
	{
		print"<td>$rec[1]</td><td>$rec[2]</td><td>$rec[3]</td>";
	}
	else
		print "NOT FOUND!!";
?>