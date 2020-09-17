<?php
    require "../includes/common.php";
    if(isset($_session['email'])){
      header('location:home.php');
    }
?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | signup</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
    </head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">E-store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="row">
 <div class="container">
    <div class="col-xs-7">
       <br><br><br>
       &nbsp&nbsp&nbsp&nbsp<img src="../img/iphone-xs-max.jpg" height="580px" width="500px">
    </div>
    <div class="col-xs-5">
    <br><br><br><br><br>
         <h2>SIGN UP</h2>
         <form class="form-group" action="signup_script.php" method="POST"><br>
         <input type="text" name="name" id="name" placeholder="Name" class="form-control" pattern="[a-zA-Z]+" title="your full name" required="true"><br>
         <input type="email" name="email" id="email" placeholder="email" class="form-control" title="email must contain @ and domain name" required="true"><br>
        
         <input type="password" name="password" id="password" placeholder="password" class="form-control"  pattern=".{8,}" title="Eight or more characters" required="true"><br> 
         <input type="tel" name="contact" id="contact" placeholder="contact" class="form-control" required="true"><br>
        
         <input type="text" name="city" id="city" placeholder="city" class="form-control" required="true"><br>
         <input type="text" name="address" id="address" placeholder="address" class="form-control" title="door no." required="true"><br>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         <br>
         <!-- <?php
               if(isset($_GET['m1'])){
                   echo $_GET['m1'];
               }
         ?>
         <?php
               if(isset($_GET['m1'])){
                   echo $_GET['m1'];
               }
         ?> -->
         <?php
               if(isset($_GET['m1'])){
                   echo $_GET['m1'];
               }
         ?>
         <br>
         <button type="submit" class="btn btn-primary btn-info" value="submit">submit</button><br>
    </div>
 </div>
</div><br><br><br><br>
<div class="footer">
    <div class="container footer-content">
      <footer>
         <div class="row">
           <div class="col-xs-4"><h3>Information</h3></div>
           <div class="col-xs-4"><h3>About us</h3></div>
           <div class="col-xs-4"><h3>Contact us</h3></div>
         </div> 
         <div class="row">
           <div class="col-xs-4"><a href="about.php"><h5>About us</h5></a></div>
           <div class="col-xs-4"><a href="login.php"><h5>login</h5></a></div>
           <div class="col-xs-4"><span class="red"><h5>contact:+91-123-9000000000</h5></span></div>
         </div> 
         <div class="row">
           <div class="col-xs-4"><a href="about.php"><h5>Contact us</h5></a></div>
           <div class="col-xs-4"><a href="signup.php"><h5>signup</h5></a></div>
         </div> 
    </footer>    
</div>
</div>
</body>
</html>
