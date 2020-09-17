<?php
    include '../includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | index</title>
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
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
        <li>
        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
  
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="body wrapper">
   <div class="container-fluid">
       <div class="row product1">
           <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-7.jpg" height="120px" width="100px">
                  <div class="caption">
                    <b> &nbsp&nbsp iphone-7</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-8.jpg" height="120px" width="100px">
                  <div class="caption">
                  <b>&nbsp&nbsp iphone-8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>


         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-xr.jpg" height="135px" width="120px">
                  <div class="caption">
                  <b>&nbsp&nbspiphone-xr</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>
      </div> 
 
      <div class="row product">
      <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-xs-max.jpg" height="120px" width="100px">
                  <div class="caption">
                  <b>&nbsp&nbspiphone-xs-max</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/mi-note-8.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbspredmi-note-8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/mi-redmi-k20-pro.jpeg" height="100px" width="90px">
                  <div class="caption">
                  <b>&nbsp&nbspredmi-note-8-pro</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>
     </div>
       <div class="row product">
       <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/one-plus-7T.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbspone-plus-8T</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/one-plus-7T-pro" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbspone-plus-7T-pro</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>
        
         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/samsung-galaxy-a51.jpeg" height="100px" width="90px">
                  <div class="caption">
                  <b>&nbsp&nbspsamsung-galaxy-a51</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block">Order now!!</button></a>
                  </div>
               </div> 
         </div>

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




 


