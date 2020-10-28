<?php
 include('inc/connection.php');

$cust_uid_e      =   'cust004';
$cust_name_e    =  'afras';


      $update_query="UPDATE `customer` SET `cust_name`='hey' WHERE `customer_uid`='cust004'";
      $result2=mysqli_query($connection,$update_query);
      if($result2){
        $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
        if ($check_effect_row==1) {        
        echo "<script>console.log('update success ful')</script>";  
        echo "<script>alert(`Customer  Details Updated`)</script>";      
        }else{
        echo "<script>console.log('affected failed')</script>";
        }
      }else{
      echo "<script>console.log('update failed')</script>";
      }
?>