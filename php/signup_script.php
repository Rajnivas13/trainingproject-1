<?php
  require "../includes/common.php";

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con , $name);
 
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con , $email);
 
  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con , $password);
  $password = md5($password);
 
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con , $contact);
 
  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con , $city);
 
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con , $address);
  
  $regex_email="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?";
  $regex_contact="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$";

  $select_query="SELECT * FROM users WHERE email='$email' AND '$password'";
  $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
  $row=mysqli_fetch_array( $select_query_result);
  $num_rows=mysqli_num_rows($select_query_result);

//   if(!preg_match($regex_email,$email)){
//     $m1="<span class='red'>incorrect email</span>";
//     header('location:signup.php?m1='.$m1);
//   }

//   elseif(!preg_match($regex_contact,$contact)){
//     $m1="<span class='red'>incorrect email</span>";
//     header('location:signup.php?m1='.$m1);
//   }

  if($num_rows!=0){
    $m="<span class='red'>the user is in already in our lists</span>";
    // header('location:signup.php?m1='.$m);
    header('location:home.php');
  }

 else{
    $insert_query="INSERT INTO users(name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address')";
    $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    $user_id=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$user_id;
    session_start();
    header('location:home.php');
 }
?>