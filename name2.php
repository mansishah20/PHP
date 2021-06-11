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
		$t1=$("#t1").val();
		$t2=$("#t2").val();
		
		$.ajax({
			url:"test2.php",
			type:"POST",
			data:{a:$t1,b:$t2},
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