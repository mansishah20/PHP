<html>
<body>

<form>
<input type="text" name="id" />
<button type="button">submit </button>

<div id="result">

</div>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
		$.ajax({
				url:"readdata.php",
				type:"post",				
				data:$("form").serialize(),				
				success:function(result){
					
					console.log(result);
					var obj = JSON.parse(result);
					if(obj.error)
						alert("not found");
					else
					{
					
					for(i=0;i<obj.length;i++)
					{
						console.log(obj[i].id);
						$("div").append(" Id = " + obj[i].id );
						$("div").append(" Name = " + obj[i].name );
					}
					
					}
				}
		});
  });
});
</script>


</body>
</html>