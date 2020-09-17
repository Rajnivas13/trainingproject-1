<?php
   require "../includes/common.php";
?>
<!DOCTYPE html>
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | home</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>
    </head>
<body>
   <?php
     include "../php/checkif-added-to-cart.php";
   ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">E-store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        $email=$_SESSION['email'];
                        echo "<h3 class='text-center'>Welcome Mr.$email</h3>";
                        echo  "<h4 class='text-center'>10% OFF on code nivas</h4>"
                    ?>
                </div>
                </div>
 
                <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../img/mi-note-8.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="../img/iphone-8.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../img/mi-note-8.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="../img/iphone-xr.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="body wrapper"> 
   <div class="container-fluid">
       <div class="row product1">
           <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-7.jpg" height="120px" width="100px">
                  <div class="caption">
                    <b> &nbsp&nbsp&nbsp iphone-7</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                    <?php
                    if(checkifadded(1)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=1"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                     </div>
               </div> 
         </div>


         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-8.jpg" height="120px" width="100px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbsp iphone-8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:55000/- &nbsp <strike>65000/-</strike></p></b>
                    <?php
                    if(checkifadded(2)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=2"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>


         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-xr.jpg" height="135px" width="120px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspiphone-xr</b>
                    <b><p>&nbsp&nbsp MRP.Rs:56000/- &nbsp <strike>61000/-</strike></p></b>
                    <?php
                    if(checkifadded(3)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=3"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
      </div> 
      <div class="row product">
      <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-xs-max.jpg" height="120px" width="100px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspiphone-xs-max</b>
                    <b><p>&nbsp&nbsp MRP.Rs:76000/- &nbsp <strike>79,000/-</strike></p></b>
                    <?php
                    if(checkifadded(4)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=4"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/mi-note-8.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspredmi-note-8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:9000/- &nbsp <strike>11000/-</strike></p></b>
                    <?php
                    if(checkifadded(5)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=5"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/mi-redmi-k20-pro.jpeg" height="100px" width="90px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspredmi-note-8-pro</b>
                    <b><p>&nbsp&nbsp MRP.Rs:7000/- &nbsp <strike>9000/-</strike></p></b>
                    <?php
                    if(checkifadded(6)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=6"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
     </div>
       <div class="row product">
       <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/one-plus-7T.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspone-plus-8T</b>
                    <b><p>&nbsp&nbsp MRP.Rs:45000/- &nbsp <strike>51000/-</strike></p></b>
                    <?php
                    if(checkifadded(7)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=7"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/one-plus-7T-pro" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspone-plus-7T-pro</b>
                    <b><p>&nbsp&nbsp MRP.Rs:55000/- &nbsp <strike>61000/-</strike></p></b>
                    <?php
                    if(checkifadded(8)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=8"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
        
         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/samsung-galaxy-a51.jpeg" height="100px" width="90px">
                  <div class="caption">
                     <b>&nbsp&nbsp&nbspsamsung-galaxy-a51</b>
                    <b><p>&nbsp&nbsp MRP.Rs:50000/- &nbsp <strike>52000/-</strike></p></b>
                    <?php
                    if(checkifadded(9)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=9"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

       
      </div>
                  </div>
    </body>