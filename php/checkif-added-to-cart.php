<?php    
    function checkifadded($itemid){
    require "../includes/common.php";
       $user_id=$_SESSION['user_id'];
       $select_query="SELECT * FROM users_items WHERE users_id='$user_id' AND item_id='$itemid'";
       $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
       $row=mysqli_fetch_array($select_query_result);
       $num_rows=mysqli_num_rows($select_query_result);
       
        if($num_rows!=0){
            return TRUE;
        }
        else{
            return FALSE;
        }
     } 

?>