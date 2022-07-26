<?php
$con=mysqli_connect("localhost","root","","excel");
$id=$_GET['cid'];
$cname=$_GET['name'];
$age=$_GET['age'];
$dob=$_GET['dob'];


$de="update user set name='$cname',age='$age',dob='$dob' where id='$id' ";
if(mysqli_query($con,$de)){
	echo "<script>alert('Update successfully');</script>";
	header("Location:manipulate.php");
}
else{
	echo "<script>alert('Error');</script>";
}
mysqli_close($con);

?>