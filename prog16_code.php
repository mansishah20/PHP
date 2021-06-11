<?php
	$con = mysqli_connect("localhost","root","","mansi");
	$state_id=$_POST['state_id'];
	
	$query="select * from city where state_id=$state_id";
	$result=mysqli_query($con,$query);
?>
<option value="">--Select City--</option>
<?php
	while($row=mysqli_fetch_array($result))
	{
?>
<option value="<?php echo $row['city_id']; ?>"><?php echo $row["cityname"] ?></option>
<?php
	}
?>

