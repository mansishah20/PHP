<!DOCTYPE html>
<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
<form> 
<input type="text" name="t1" id="t1"/>
<input type="text" name="t2" id="t2"/>
<button type="button">Submit</button>
</form>
<div id="div1">
</div>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$.ajax({
			url:"test.php",
			type:"POST",
			data:$("form").serialize(),
			success:function(result){
				$("#div1").html(result);
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