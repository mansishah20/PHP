<?php 

class Student
{
	public $con;
	function __construct()
	{
$this->con = mysqli_connect("localhost","root","","mansi");
	}	
	function insert($name,$course,$fees)
	{
$query="insert into student(name,course,fees) values('$name','$course','$fees')";
$result=mysqli_query($this->con,$query);
	}

	function update($rno,$name,$course,$fees)
	{
$query="update student set name='$name',course='$course',fees='$fees' where rno=$rno";
$result=mysqli_query($this->con,$query);
return (mysqli_affected_rows($this->con));
	}

	function delete($rno)
	{
$query="delete from student where rno=$rno";
$result=mysqli_query($this->con,$query);
return mysqli_affected_rows($this->con);
	}

	function display()
	{
$query="select * from student";
$result=mysqli_query($this->con,$query);
return $result;
	}

	function find($rno)
	{
$query="select * from student where rno=$rno";
$result=mysqli_query($this->con,$query);
if( $row=mysqli_fetch_array($result))
return $row;
else
return false;
	}

}
?>
