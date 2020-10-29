<?php
    include('../inc/connection.php');
   
        $sup_uid      =   $_POST['sup_uid'];
        $sup_name    =   $_POST['sup_name'];
        $contect_no   =   $_POST['contect'];
        $address1     =   $_POST['addrsss1'];
        $address2     =   $_POST['addrsss2'];
        $email        =   $_POST['email'];
      
        $name="/^[a-zA-Z ]*$/";
        $emailValidatiaon="/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2.4})$/";
        $number ="/^[0-9]+$/";
 
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
           echo "<script>$('#message1').html(`
           <div class='alert alert-warning'>
                   <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                   &times;</a><b>$emailErr</b> 
                   </div>`)</script>";
      exit();
       }
 
       if (!preg_match($name,$sup_name)) {
         $nameErr = "Only letters and white space allowed";
           echo "<script>$('#message1').html(`
           <div class='alert alert-warning'>
                   <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                   &times;</a><b>$nameErr</b>
                   </div>`)</script>";
          exit(); 
       }
 
       if(!preg_match('/^[0-9]{10}+$/', $contect_no)){
        echo "<script>$('#message1').html(`
        <div class='alert alert-warning'>
                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                &times;</a><b>contect number  more than 10 digit</b>     </div>`)</script>;";exit();
    }
   

        $update_query="UPDATE `supplier` SET `sup_name`='$sup_name',`contect_no`='$contect_no',
        `address`='$address1',`address2`='$address2',`email`='$email' WHERE `sup_uid`='$sup_uid'";
        $result2=mysqli_query($connection,$update_query);
        if($result2){
          $check_effect_row=mysqli_affected_rows($connection);
          if ($check_effect_row==1) {        
            echo "<script>window.location.reload()</script>";  
          echo "<script>alert(`Customer  Details Updated`)</script>";      
        }else{
          echo "<script>console.log('affected failed')</script>";
        }
      }else{
        echo "<script>console.log('update failed')</script>";
      }
      
      

?>