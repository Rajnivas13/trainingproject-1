<?php
    require "../includes/common.php";
?>

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | contact us</title>
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
       
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <br>
            <br>
            <h2>LIVE SUPPORT</h2>
            <br>
            <h4>24 hours a day|7 days a week|24 hrs a day|365 days in a year TECHNICAL SUPPORT</h4>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lorem tellus, volutpat at lobortis at, consectetur eu nibh. Maecenas rutrum vestibulum porttitor. Suspendisse et augue id justo pellentesque mattis in non massa. Aenean auctor dolor in porttitor consectetur. Fusce molestie, ipsum sed pellentesque elementum, quam ex pellentesque sapien, id dignissim elit risus et sem. Cras posuere purus turpis, luctus commodo ante cursus non. Pellentesque ut eros eget nulla accumsan consequat et non metus.

Aliquam imperdiet porta mi. Morbi euismod non libero et tincidunt</p>
        </div>
        <div class="col-xs-4">
            <br><br><br>
            <img src="../img/live-support.gif">
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
        <div class="col-xs-8">
            <h3>CONTACT INFO.</h3>
               <form class="form-group" action="contact_script.php" method="POST">
                   <label for="name" >Name</label><br>
                   <input type="text" name="name" id="name" class="form-control" placeholder="Name" size="75" title="your name" required><br><br>
                   <label for="email">E-mail</label><br>
                   <input type="email" name="email" id="email"  class="form-control" placeholder="email" size="75" title="your email" required><br><br>
                   <label for="Message">Message</label><br>
                   <textarea name="message" rows="4" cols="77" placeholder="your comments..." class="form-control" title="your valuable comments" required></textarea>
                <?php
                if(isset($_GET['m1'])){
                  echo $_GET['m1'];
                }
                ?>        
                <br> <br>
                 <button type="submit" class="btn btn-primary" value="submit">submit</button>
              
           </div>
           <div class="col-xs-4">
              <h3>COMPANY INFORMATION</h3><br>
              <p>500,Lorem ipsum dolor sit amet,</p></br>
               <p>USA</p>
               <p>phone:+91-0000000000</p>
               <p>email:abc@gmail.com</p>
               <p>fax:(000) 000000000</p>
               <p>follow us on:facebook,twitter,instagram</p>
           </div>
        </div>
    </div>
</div>
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