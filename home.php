<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
			  <link href="animate/animate.min.css" rel="stylesheet">
			   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
			   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			   <script src="js/jquery.js"></script>
			   <link href="css/mdb.min.css" rel="stylesheet">
		
			<script src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/popper.min.js"></script>
			
			<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
			    
			  <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Registerd Student</title>
	<style type="text/css">
		#display{
     padding: 30px;
	background-color:burlywood;
    width: 1000px;
}
#display1{
    padding: 30px;
}
#tabl{
	padding: 20px;
    
}
#tabl table {
  border-collapse: collapse;
  width: 100%;
  border: 2px solid black;
}
#tabl th{
  font-family: 'Allerta';
  color: white;
   font-weight: bold;
   font-size: 20px;
   background-color:black;
   padding: 8px;
  text-align: center;
   
}
#tab1 tr{
	font-family: 'Allerta';
  
   font-size: 15px;
      padding: 8px;
  

}
#tabl td{
	color: black;
   font-weight: bold;
 text-align: center;
 line-height: 50px;
  border-bottom: 2px solid gray;
}

#tabl tr:hover {background-color:#f5f5f5;}
#registered_student
{
    padding-top: 20px;
    
}

	</style>
</head>
<body>

<?php
include('include/header.php');

?>


<div id="registered_student" >
<h1 style="padding-bottom: 20px;">
Registered User
</h1>
<div class="container-fluid" id="display">
	<div class="container-fluid" id=" display1">
		<div id="tabl">
      <?php  $con=mysqli_connect("localhost","root","","excel");
       $sql="select * from user as u inner join depart as d on u.id=d.id";
       
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
        echo "<table>";
        echo "<tr><th>name</th><th>age</th><th>Date Of Birth</th><th>Departmant</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $rows['name'];?></td>
        
        <td><?php echo $rows['age'];?></td>
        <td><?php echo $rows['dob'];?></td>
        <td><?php echo $rows['department'];?></td>
        
      </tr>
      <?php 
    
}
echo "</table>";
}
?>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#statics">ADD USER&nbsp;<i class="fa fa-plus-circle"></i></button>
</div>
	</div>	
</div>

</div>
<div class="modal fade" id="statics" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Company</h5>
      </div>
      <div class="modal-body">
    <form method="post" action="adduser.php" >
      
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="age" required autocomplete="off" min=1 max=100>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Dob</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date" required autocomplete="off">
  </div>
  <div class="form-group">
  <select class="custom-select" name="list">
  <option selected>select menu</option>
  <option value="CSE">cse</option>
  <option value="EEE">eee</option>
  <option value="ECE">ece</option>
  <option value="MECH">mech</option>
  <option value="CIVIL">civil</option>
  <option value="IT">it</option>
</select>
  </div>
   
  <input type="submit" class="btn btn-primary" value="Add User" name="submit">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<?php
include('include/footer.php');
?>

</body>
</html>