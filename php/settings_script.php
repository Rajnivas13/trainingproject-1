<?php
    require "../includes/common.php";
    $user_id=$_SESSION['user_id'];

    $oldpassword=$_POST['oldpassword'];
    $$oldpassword=mysqli_escape_string($con, $oldpassword);
    $oldpassword=md5($oldpassword);
 
    $newpassword=$_POST['newpassword'];
    $$newpassword=mysqli_escape_string($con, $newpassword);
    $newpassword=md5($newpassword);

    $retypepassword=$_POST['retypepassword'];
    $$retypepassword=mysqli_escape_string($con, $retypepassword);
    $retypepassword=md5($retypepassword);

    $query="SELECT password FROM users WHERE user_id='$user_id' AND password='$oldpassword' ";
    $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
    $num_rows=mysqli_num_rows($query_result);
    if($num_rows!=0){
    if(!(preg_match($newpassword,$retypepassword))){
        $m1= "<span class='red'>invalid credentials</span>";
        header('location:settings.php?m1='.$m1);
    }
    else{
    $success = "<span class='green'>Password Changed</span>";
    header("location:settings.php?m1=".$success);
    $query="UPDATE users SET password='$newpassword' INTO users WHERE user_id='$user_id' AND password='$oldpassword' ";
    $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
    }
  }
  else{
    $error = "<span class='red'>Password Changed</span>";
    header("location:settings.php?m1=".$error);
  }
?>