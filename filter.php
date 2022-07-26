<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
  #filter{
    padding: 50px;

  }
table {
  
  font-family: arial ;
  border-collapse: collapse;
  width: 100%;
}
th{
  background-color: black;
  color: white;
  font-size: 20px;
  font-weight: bold;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #dddddd;
}




</style>
</head>
<body>
<div class="container-fluid" id="filter">
<h2>Filter</h2>
 

<br>
<?php  $con=mysqli_connect("localhost","root","","excel");
       $sql="select * from user";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
         echo "<input id=myInput type=text placeholder=Search..>";
         echo "<table>";
         echo "<tr><th>Name</th><th>Age</th><th>Date</th></tr>";
         echo "</table>";
         echo " <table id=myTable>";
        
         while($rows=mysqli_fetch_array($result))
         {
                  
    ?>

      <tr>
        <td><?php echo $rows['name'];?></td>
        
        <td><?php echo $rows['age'];?></td>
        <td><?php echo $rows['dob'];?></td>
        
      </tr>
      <?php 
    
}
echo "</table>";
}
?>
  
  </div>

</body>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
