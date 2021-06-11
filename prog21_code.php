<?php

$con = mysqli_connect("localhost","root","","mansi");

$start=$_POST['start'];
$rs=mysqli_query($con,"select * from student limit $start,2");

$response= array();



while($rec=mysqli_fetch_assoc($rs))
{
	$response[] = $rec;
}

$qcount="select * from student";
$rscount = mysqli_query($con,$qcount);
$n= mysqli_num_rows($rscount);

$response['count'] =$n / 2;
echo json_encode($response);

?>