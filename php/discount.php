<?php
   $code=$_POST['code'];
   $CODE="nivas";

   if($code!=$CODE){
     $m1="<span class='danger'>incorrect code</span>";
     header('location:cart.php?m1='.$m1);

   }
   else{
    $m1="<span class='danger'>correct code</span>";
    header('location:cart.php?m1='.$m1);
   }



?>