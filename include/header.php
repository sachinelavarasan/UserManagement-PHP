<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Inria Sans' rel='stylesheet'>
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">   
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <link href="css/mdb.min.css" rel="stylesheet">  
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <style>
    
#second{
      margin:0;
      padding: 0;
} 
   #second #navbarSupportedContent{
           
      animation: bounce 2s 1;
      border-radius: 25px;
      animation-timing-function: linear;
      background-color: grey;
      padding: 8px;
     
    }
    #navbarSupportedContent .nav-item{
      padding-right: 30px;
      padding-top: 10px;
      padding-left: 30px;
    }

        
    #navbarSupportedContent .nav-item .nav-link{
      width: 115px;
      color: black;
      font-weight: bold;
      font-family: 'Krona One', sans-serif;
      text-align: center;
      display: inline-block;
      overflow: hidden;
      transition: 0.5s;
      letter-spacing:2px;
    }
    #navbarSupportedContent .nav-item .nav-link:hover{
      
      border-radius: 7px;
      background:salmon;
      color: white;
      font-family: cursive;
      box-shadow: 0 0 10px salmon,
                  0 0 10px salmon,
                  0 0 10px salmon,
                  0 0 10px salmon;

    }
    .navbar-brand {
       margin-left: 25px;
      font-family: cursive;
      position: relative;
      animation: bounce 2s infinite;
      animation-timing-function: linear;
    }
    
    </style>
    
</head>
<body>
<?php 



?>
<div class="container-fluid" id="second">
<nav class="navbar navbar-expand-lg navbar-light" id="navbar2" style="background-color: khaki;">
  <a class="navbar-brand" href="#">Registration</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manipulate.php">Manipulate</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>
</div>

</body>
    
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>