<?php
$con=mysqli_connect("localhost","root","","excel");
$id=$_GET['id'];


$de="delete from user where id='$id' ";
$de1="delete from depart where id='$id' ";
if(mysqli_query($con,$de)){
	echo "<script>alert('deleted successfully');</script>";
	header("Location:manipulate.php");
}
else{
	echo "<script>alert('Error');</script>";
}
mysqli_close($con);

?>