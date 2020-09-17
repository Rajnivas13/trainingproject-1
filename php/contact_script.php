<?php
 require "../includes/common.php";

 $name = $_POST['name'];
 $name = mysqli_real_escape_string($con , $name);

 $email = $_POST['email'];
 $email = mysqli_real_escape_string($con , $email);

 $message = $_POST['message'];
 $message = mysqli_real_escape_string($con , $message);

  $user_id=$_SESSION['user_id'];
  if(isset($user_id)){
    $query="INSERT INTO users_feedback(user_id,name,email,message) VALUES ('$user_id','$name','$email','$message')";
    $query_result = mysqli_query($con,$query) or die(mysqli_error($con));


     $select_query="SELECT * FROM  users_feedback WHERE user_id='$user_id' AND email='$email'";
     $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
     $num_rows=mysqli_num_rows($result);
       if($num_rows!=0){
           $m1="<span class='red'>your response has successfully registered!!!</span>";
           header('location:contact.php?m1='.$m1);
       }


 }

 


?>