<?php
include('../inc/connection.php');
session_start();

$itm_no         = $_POST['itm_no'];
$itm_name       = $_POST['itm_name'];
$qty            = $_POST['qty'];
$sup_name       = $_POST['sup_name'];
$sup_email      = $_POST['sup_email'];
// echo "<script>alert('Input filed are not empty +$sup_email')</script>";


$name="/^[a-zA-Z ]*$/";
   echo "<script>console.log('Input filed are not empty')</script>";
    if (!filter_var($sup_email, FILTER_VALIDATE_EMAIL)) {   
          echo "<script>$('#orderMSG').html(`
          <div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$sup_email Invalid email format</b> 
                  </div>`)</script>";
     exit();
      }
    
    if (!preg_match($name,$sup_name)) {
        $nameErr = "Only letters and white space allowed";
          echo "<div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$nameErr</b> ";
          exit();
      }
    
      
       $findSql="SELECT * FROM `item` WHERE item_id ='$itm_no'";
       $check_query2=mysqli_query($connection,$findSql);
       if($check_query2){  
          if(mysqli_num_rows($check_query2)>0){     
                 $findSql1="SELECT * FROM `supplier` WHERE email ='$sup_email'";
                 $check_query21=mysqli_query($connection,$findSql1);
                 if($check_query21){  
                    if(mysqli_num_rows($check_query21)>0){


                      $sql1="INSERT INTO `ordertb` (`o_id`, `itm_no`, `itm_name`, `qty`,  `sup_name`, `sup_email`) 
                      VALUES (NULL, '$itm_no', '$itm_name', '$qty', '$sup_name', '$sup_email');";
                      $run_query1=mysqli_query($connection,$sql1);
                      if($run_query1){   
                                              
                        $nameErr = "Item Add";
                        echo "<div class='alert alert-warning'>
                                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                                &times;</a><b>$nameErr</b> ";
                        exit();
                       }
                     }else{
                      $nameErr = "supplier email wrong There no such a supplier on list";
                      echo "<div class='alert alert-warning'>
                              <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                              &times;</a><b>$nameErr</b> ";
                      exit();
                     }
                    }
            //        
              
          }else{
            $nameErr = "Item Id wrong There no such a Item on list";
            echo "<div class='alert alert-warning'>
                    <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a><b>$nameErr</b> ";
            exit();

          }
        }
                                               
?>