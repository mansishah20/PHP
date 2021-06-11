<?php

$con = mysqli_connect("localhost","root","","mansi");

$id=$_POST['id'];
$rs=mysqli_query($con,"select * from info where id=$id");

$response= array();

if($rec=mysqli_fetch_assoc($rs))
{
	$response[] = $rec;	
}
else
{
	$response['error']= true;
}

echo json_encode($response);
?>