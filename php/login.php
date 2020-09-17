<?php
     require "../includes/common.php";
  //   if(isset($_SESSION['email'])){
  //     header("location:home.php");
  // }
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | login</title>
        <meta name="description" content="loginpage">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="../css/internshala.css">
        <link rel="stylesheet" href="internshala.css">
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
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
      </ul>
    </div>
  </div>
</nav><br><br><br><br><br><br><br><br>
          <div class="container-fluid margin">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3>Login</h3>
                  </div>
                  <div class="panel-body">
                      <p class="text-danger">login to make a purchase</p><br>
                      <form class=form-group method="POST" action="login_script.php">
                          <label for="email" name="email">email</label>
                          <input type="email" id="email" class="form-control" placeholder="email"  name="email" required="true" > <br>
                          <label for="password" name="password">password</label>
                          <input type="password" id="password" class="form-control" placeholder="password" name="password" required="true" >
                    <br><?php
                          if(isset($_GET['m1'])){
                                echo $_GET['m1'];
                          }
                          ?>
                          <br><br>
                          <button input type="submit" class="btn btn-primary">submit</a><br>
                        </form>
                  </div>
                  <div class="panel-footer">
                      <p >don't have an account?<a href="signup.php">register?</a></p>
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
         <div class="row y">
           <div class="col-xs-4"><a href="about.php"><h5>About us</h5></a></div>
           <div class="col-xs-4"><a href="login.php"><h5>login</h5></a></div>
           <div class="col-xs-4"><span class="red"><h5>contact:+91-123-9000000000</h5></span></div>
         </div> 
         <div class="row y">
           <div class="col-xs-4"><a href="contact.php"><h5>Contact us</h5></a></div>
           <div class="col-xs-4"><a href="signup.php"><h5>signup</h5></a></div>
         </div> 
    </footer>    
</div>
</div>
   
    </body>
</html>
         