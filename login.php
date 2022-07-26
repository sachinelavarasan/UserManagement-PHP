<?php 
    session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
	<style>
		*{
			margin:0px;
			padding: 0px;
		}
   
		#login{
  
      padding-top: 10px;
			background-color: white;
			width: 350px;
			margin-left: 500px;
			margin-top: 50px;
			height: 500px;
			border-radius: 40px;
      border:2px solid black;
			opacity: 0.9;
			animation: rubberBand 2s 1;
      animation-timing-function: linear;
		}
		.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  animation: fadeIn 2s 1;
  animation-timing-function: linear;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}
#login:hover{
		box-shadow: 0 0 5px salmon,
                  0 0 10px salmon,
                  0 0 15px salmon,
                  0 0 20px salmon;
	}
  #text{
    color: red;
    padding: 5px;
    font-weight: bold;
  }
 

	</style>
</head>
<body>
	<div class="container-fluid" id="login">
  <form method="post" action="" class="form-group" onsubmit="return valid();">
<center>
      <h3 style="color:aquamarine;font-weight: bold;">Admin Login</h3>
      <div class="imgcontainer">
    <img src="img/avatar.jpg" alt="Avatar" class="avatar">
      </div>
      </center>
    <div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="user" required autocomplete="on">
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="pass" id="pass">
		<div >
      <p id="text"></p>
         </div>  
    </div>
    
  <div class="text-center my-4">
        <button class="btn btn-primary text-white btn-lg" type="submit" name="submit">Login</button>
      </div>
  
  </form>
</div>
</body>
<script>
  function valid(){
	  var input = document.getElementById("pass").value;
      
     
      if(input== "")
      {      	  
        document.getElementById("text").innerHTML="Your password Cannot be empty";
            return false;
      }         

  }

</script>
<?php 
    
           $con=mysqli_connect("localhost","root","","excel");
      if(isset($_POST['submit'])){
              $email = $_POST["user"];
              $pass = $_POST["pass"];

              $cekuser = mysqli_query($con,"SELECT * FROM admin WHERE email = '$email'");
              $ro= mysqli_num_rows($cekuser);
             
              
              if($ro>0) 
              {
                
                $che= "select * from admin where email='$email' and pass = '$pass'";
                $roo=mysqli_query($con,$che);
                if(mysqli_num_rows($roo)>0)
                {
                $_SESSION["email"] = $email;
                if (isset($_SESSION["email"] ))
              {
                    if(!empty($_POST["remember"]))
                    {
                    setcookie ("email",$email,time()+ (10 *24 * 60 * 60));
                     setcookie ("pass",$pass,time()+ (10 *24 * 60 * 60));
                   }
       echo "<script>alert('Welcome Admin'); window.location = 'home.php'</script>";
      }
      }else{
        
        echo "<script>alert('invalid'); window.location = 'index.php'</script>";
      }            
      }
    }
?>




</html>