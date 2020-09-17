<?php
  require "../includes/common.php";
?>

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | cart</title>
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
      <a class="navbar-brand" href="home.php">E-store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a><li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br><br>
<div class="content">
        <div class="container">        
        
        <form action="discount.php" class="form-inline " method="POST" >
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <?php
            if(isset($_GET['m1'])){
              echo $_GET['m1'];
            }
            ?>
        </form> 
<br>


<?php
$sum=0;
if(isset($_GET['m1'])){
 $disc= $_GET['m1'];
}
$user_id=$_SESSION['user_id'];
$query="SELECT items.name AS Name, items.price AS Price, items.id AS pid FROM items  INNER JOIN users_items ON items.id=users_items.item_id WHERE users_items.users_id='$user_id' AND status='Added to cart' ";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($query_result);

?>
<div class="table">
    <div class="container">
    <div class="table style">
            <table class="table table-hover table-striped table-bordered" >
                  <tr class="danger">
                    <th>Item no.</th>
                    <th>Item name</th>
                    <th>Item price</th>
                    <th>Remove</th>
                  </tr>
<?php
   if($num_rows!=0){
     while($row=mysqli_fetch_array($query_result))
     {
      $sum+= $row["Price"];                                    
      $id = $row["pid"];
      echo "<tr class='success'><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart_remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
     } 
     if(isset($disc)){
          $sum=$sum -$sum * (0.1);
     }
     echo "<tr class='info'><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
   }
   else{
     echo"<span class='danger'>Add items on your cart</span>";
     echo "<tr class='info'><td></td><td>Total</td><td>Rs " . "--" . "</td><td><a href='#' class='btn btn-danger btn-block disabled'>confirm order</a></td></tr>";
   }

?>

                   <tbody>
                   
                  </tbody>   
                </table>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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