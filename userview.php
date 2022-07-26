<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
    body{
        background-color: blanchedalmond;

    }
    #images{
        margin-top: 60px;        
        margin-bottom: 60px;
        animation: heartBeat 1s infinite;
      animation-timing-function: linear;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fa fa-user" aria-hidden="true"></i> Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#"><?php session_start(); echo $_SESSION["email"];?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userlogout.php"><b>Logout</b></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      Log-In : <?php echo $_SESSION["logtime"]; ?>
    </form>
  </div>
</nav>
<center>
<div class="container-fluid" id="images">
<img src="https://c4.wallpaperflare.com/wallpaper/917/971/718/neon-sign-snow-welcome-yellow-wallpaper-preview.jpg" alt="welcome" height="400px" width="400px">
</div>
</center>
<script src="https://use.fontawesome.com/caa6207113.js"></script>
    
</body>
</html>