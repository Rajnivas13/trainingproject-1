<?php
    require "../includes/common.php";
    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        $item_id=$_GET['id'];
        $users_id=$_SESSION['user_id'];
        $select_query="INSERT INTO users_items(users_id,item_id,status)VALUES('$users_id',$item_id,'Added to cart') ";
        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
        header('location:home.php');
    }
?>