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
		body{
			background-color: moccasin;
			
		}
		#login{
			padding-top: 30px;
			background-color: white;
			width: 350px;
			margin-left: 800px;
			margin-top: 50px;
			height: 550px;
			border-radius: 40px;
			opacity: 0.9;
			animation: wobble 2s 1;
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
		box-shadow: 0 0 5px black,
                  0 0 10px black,
                  0 0 15px black,
                  0 0 20px black;
	}

	</style>
</head>
<body>
	<div class="container" id="login">
<form method="post" action="" class="form-group" onsubmit="valid();">

  <div class="form-group">

<center>
      <h3 style="color:green;font-weight: bold;">Login</h3>
      <div class="imgcontainer">
    <img src="img/avatar.jpg" alt="Avatar" class="avatar">
      </div>
      </center>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" autocomplete="on" name="email" required
    >
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass"  name="pass" required
    >
		<div class="text">
         </div>  
    </div>
    
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="remember">
    <label class="form-check-label" >Remember Me</label>
  </div>
  <div class="text-center my-4">
        <button class="btn btn-primary text-white btn-lg" type="submit" name="submit">Login</button>
      </div>
      
</form>
</div>
<script >
function valid(){
    var input = document.getElementById("pass").value;
      
     
      if(pass.value == "")
      {         
            alert("Your password cannot be empty ");
            return false;
      }         

  }

</script>
<?php 
    
    $con=mysqli_connect("localhost","root","","excel");
if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $cekuser = mysqli_query($con,"SELECT * FROM register WHERE email = '$email'");
        $ro= mysqli_num_rows($cekuser);
        
        if($ro>0) 
        {
          $check= "SELECT * FROM register WHERE email = '$email' and pass = '$password'";
          $ro1=mysqli_query($con,$check);
          if(mysqli_num_rows($ro1)==1)
          {
          $_SESSION["email"] = $email;
         date_default_timezone_set('Asia/Kolkata');
         $date = date('d-m-y h:i:s');
           $_SESSION["logtime"] = $date;

          if (isset($_SESSION["email"] ))
        {
              if(!empty($_POST["remember"]))
              {
              setcookie ("email",$email,time()+ (10 *24 * 60 * 60));
               setcookie ("pass",$password,time()+ (10 *24 * 60 * 60));
             }
 echo "<script>alert('Your Account has Login! $email'); window.location = 'userview.php'</script>";
}
}else{
  echo "<script>alert('invalid password'); window.location = 'userlogin.php'</script>";
}
            
        } 
        else{
          echo "<script>alert('invalid username or password'); window.location = 'userlogin.php'</script>";
        }

      }
    ?>



</body>
</html>