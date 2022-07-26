<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	$id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","excel");
	$que="select * from user where id ='$id'";
	$res=mysqli_query($con,$que);

	?>
	<div class="container" style="padding-top: 20px;padding-bottom: 20px;width:300px;height:600px; margin-top: 50px;">
	<h3>Update User</h3>
	<form action="updatevalue.php" method="get">
		<?php
		while($row=mysqli_fetch_array($res))
		{
		?>
	<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Company name" required autocomplete="off" value="<?php echo $row['name'];?>">
  </div>
  <div class="form-group">
    <label for="gender">Age</label>
    <input type="text" class="form-control" name="age" placeholder="Company Location" required autocomplete="off" value="<?php echo $row['age'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="dob" required autocomplete="off" value="<?php echo $row['dob'];?>">
  </div>
  
  <input type="hidden" class="btn btn-primary" value="<?php echo $row['id'];?>" name="cid">

   
  <input type="submit" class="btn bg-success btn-block" value="Edit User" name="submit">

<?php
}
mysqli_close($con);
?>

		
	</form>

</body>
</html>