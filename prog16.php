<!--display data-->
<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
<b><form method="post" class="namy">
Select State:<br><br>
<select name="state" id="state">
	<option value="">--Select State--</option>
<?php
	$con = mysqli_connect("localhost","root","","mansi");
	$query = "select * from state";
	$result = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
?>
<option value="<?php echo $row['state_id']; ?>"><?php echo $row["statename"] ?></option>
<?php
	}
?>
</select><br><br>
Select City:<br><br>
<select name="city" id="city">
	<option value="">--Select City--</option>
	
</select>
</form></b>
</body>
<script>
$(document).ready(function(){
	$("#state").change(function(){
		var state_id=this.value;
		
		$.ajax({
			url:"prog16_code.php",
			type:"POST",
			data:{
				state_id:state_id
			},
			success:function(result){
				$("#city").html(result);
			}
		});
	});
});
</script>
</html>