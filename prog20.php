<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

$con = mysqli_connect("localhost","root","","mansi");

if(isset($_GET['id']))
{
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from info where id=$id");
}
else
{
$rs=mysqli_query($con,"select * from info");
}
$response= array();

while($rec=mysqli_fetch_assoc($rs))
{
$response[] = $rec;	
}

echo json_encode($response);
?>