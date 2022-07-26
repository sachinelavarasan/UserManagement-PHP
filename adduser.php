<?php
session_start();
$con=mysqli_connect("localhost","root","","excel");


if(isset($_POST['submit']))
{    
	$name=$_POST['name'];
	    $age=$_POST['age'];
        $date=$_POST['date'];
      $list=$_POST['list'];
      
    
  $sql="INSERT INTO user(name,age,dob) VALUES('$name',$age,'$date')";
  $sql1="INSERT INTO depart(department) VALUES('$list')";
  mysqli_query($con,$sql1);
 if(mysqli_query($con,$sql))
 {
 		echo "<script>alert('user added SuccessFully'); window.location = 'home.php'</script>";
 } 
 else
 {
 	
 	 	echo "<script>alert('Something Error'); window.location = 'home.php'</script>";
 }
}

?>
