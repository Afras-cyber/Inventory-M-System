<?php
include('../inc/connection.php');

    $sup_uid      =   $_POST['sup_uid'];
    $sup_name     =   $_POST['sup_name'];
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
                </div>`)</script>;";
   exit();
    }

    if (!preg_match($name,$sup_name)) {
      $nameErr = "Only letters and white space allowed in Customer name";
        echo "<script>$('#message1').html(`
        <div class='alert alert-warning'>
                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                &times;</a><b>$nameErr</b>
                </div>`)</script>;";
       exit(); 
    }

    if(!preg_match('/^[0-9]{10}+$/', $contect_no)){
     echo "<script>$('#message1').html(`
     <div class='alert alert-warning'>
             <a herf=# class='close' data-dismiss='alert' aria-label='close'>
             &times;</a><b>contect number  more than 10 digit</b>     </div>`)</script>;";exit();
 }

    
$sqlq= "SELECT sup_uid FROM supplier WHERE sup_uid='$sup_uid' LIMIT 1";
$check_queryq= mysqli_query($connection,$sqlq);
$count_uid = mysqli_num_rows($check_queryq);
if($check_queryq){

  if($count_uid>0){
    $nameErr="This customer  already available You can only edit their profile";
    echo "<script>$('#message1').html(`
    <div class='alert alert-warning'>
            <a herf=# class='close' data-dismiss='alert' aria-label='close'>
            &times;</a><b>$nameErr</b>     </div>`)</script>;";
      exit();
  }
  else{
      $sql="INSERT INTO `supplier` (`sup_id`, `sup_uid`, `sup_name`, `contect_no`, `address`,`address2`, `email`) 
      VALUES (NULL, '$sup_uid', '$sup_name', '$contect_no', '$address1','$address2', '$email')";
      $check_query=mysqli_query($connection,$sql);
      if($check_query){
          echo "<script>window.location.reload()</script>";
      }
      else{
          echo "<script>console.log('query insert failed ')</script>";
      }
  
  }
} else{
  echo "<script>console.log('query select failed')</script>";
}


  
?>
