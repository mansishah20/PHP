<html>
<body>

<form>

<div id="data">

</div>

<button type="Submit" id="btnprev">Prev</button>
<button type="Submit" id="btnnext">Next</button>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$start = 0;
	$.ajax({
			url:"prog21_code.php",
			type:"post",
			data:{start:$start},
			success:function(result){
				$("#data").html(result);
				console.log("Started data"+ result);
				var obj = JSON.parse(result);
				console.log("count = " + obj.count);
			
			}
	});



	$("#btnprev").click(function(){
		$start = $start-2;
		$.ajax({
			url:"prog21_code.php",
			type:"post",
			data:{start:$start},
			success:function(result){
				$("#data").html(result);
		
			}		
		});
	});
	$("#btnnext").click(function(){
		$start = $start+2;
		$.ajax({
			url:"prog21_code.php",
			type:"post",
			data:{start:$start},
			success:function(result){
				$("#data").html(result);
		
			}		
		});
	});


});
</script>





