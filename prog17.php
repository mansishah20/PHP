<!--find data-->
<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
<form>
Enter Roll no.:<input type="text" name="rno"/><br>
<button type="button">Submit</button>
</form>

<table width="50%" border="1">
<tr>
<th>Name</th>
<th>Course</th>
<th>Fees</th>
</tr>
<tr id="tr2">

</tr>
</table>

<script>
$(document).ready(function(){
	$("button").click(function(){
		$.ajax({
			url:"prog17_code.php",
			type:"POST",
			data:$("form").serialize(),
			success:function(result){
				$("#tr2").html(result);
				alert(result);
				
			},
			error:function(xhr,desc,err)
			{
				console.log("error");
			}
		});
	});
});
</script>
</body>
</html>