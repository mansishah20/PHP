<html>
<body>

<?php

include("student.php");
$s = new Student();
$rno=$_GET['rno'];

$data=$s->find($rno);

?>
<form action="update_code.php" method="post">

<input type="text" name="rno" 
placeholder="Enter rno for update " value="<?php print $data['rno']?>" />
<br>

<input type="text" name="name" placeholder="Enter name " value="<?php print $data['name']?>" />
<br>
<input type="text" name="course" placeholder="Enter course " value="<?php print $data['course']?>" />
<br>
<input type="text" name="fees" placeholder="Enter fees " value="<?php print $data['fees']?>" />
<br>
<button type="submit"> Submit </button>

</form>
</body>
</html>