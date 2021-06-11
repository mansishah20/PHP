<html>
<body>

<?php

include("student.php");
$s = new Student();
$rno=$_GET['rno'];

$data=$s->find($rno);

?>

Name <?php print $data['name'] ?> <br>
Course <?php print $data['course'] ?> <br>
Fees <?php print $data['fees'] ?> <br>

<form action="del_code.php" method="post">

<input type="hidden" name="rno"  value="<?php print $data['rno']?>" />
<br>
<button type="submit"> Submit </button>

</form>
</body>
</html>