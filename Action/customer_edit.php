<?php
         include('../inc/connection.php');
     
      
        $cust_uid_e      =   $_POST['cust_uid'];
        $cust_name_e    =   $_POST['cust_name'];
        $contect_no_e   =   $_POST['contect'];
        $address1_e     =   $_POST['addrsss1'];
        $address2_e     =   $_POST['addrsss2'];       
        $email_e        =   $_POST['email'];       
 
        $name="/^[a-zA-Z ]*$/";
        $emailValidatiaon="/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2.4})$/";
        $number ="/^[0-9]+$/";
 
       if (!filter_var($email_e, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
           echo "<script>$('#message1').html(`
           <div class='alert alert-warning'>
                   <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                   &times;</a><b>$emailErr</b> 
                   </div>`)</script>";
      exit();
       }
 
       if (!preg_match($name,$cust_name_e)) {
         $nameErr = "Only letters and white space allowed";
           echo "<script>$('#message1').html(`
           <div class='alert alert-warning'>
                   <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                   &times;</a><b>$nameErr</b>
                   </div>`)</script>";
          exit(); 
       }
 
       if(!preg_match('/^[0-9]{10}+$/', $contect_no_e)){
        echo "<script>$('#message1').html(`
        <div class='alert alert-warning'>
                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                &times;</a><b>contect number  more than 10 digit</b>     </div>`)</script>;";exit();
    }
   
  
    $update_query="UPDATE `customer` SET `cust_name`='$cust_name_e',`contect_no`='$contect_no_e',`address`='$address1_e',
    `address2`='$address2_e',`email`='$email_e' WHERE `customer_uid`='$cust_uid_e'";
    
    $result2=mysqli_query($connection,$update_query);
    if($result2){
      $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
      if ($check_effect_row==1) {       
        echo "<script>window.location.reload()</script>";
      }else{
      echo "<script>console.log('affected failed')</script>";
      }
    }else{
    echo "<script>console.log('update failed')</script>";
    }
  
  
?>