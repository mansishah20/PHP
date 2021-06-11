<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input",true));

$name= $data->name;
$city= $data->city;
$age= $data->age;


$con = mysqli_connect("localhost","root","","mansi");
$q="insert into info(name,city,age) values('$name','$city','$age')";

$response= array();
if($rs=mysqli_query($con,$q))
{
	$response['msg'] = "successfully inserted";
	$response['error'] = false;
}
else
{
	$response['msg'] = "something wrong";
	$response['error'] = true;
}

echo json_encode($response);

?>