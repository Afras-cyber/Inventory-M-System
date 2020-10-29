<?php
include('../inc/connection.php');


    $no1         =$_POST['item_id'];
    $name1       =$_POST['item_name'];
    $category1   =$_POST['category'];
    $description1=$_POST['description'];
    $buy1        =$_POST['buy_price'];
    $sell1       =$_POST['sale_price'];
  
    
    $name="/^[a-zA-Z ]*$/";

    if (!preg_match($name,$name1)) {
        $nameErr = "Only letters and white space allowed in Customer name";
          echo "<script>$('#message1').html(`
          <div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$nameErr</b>
                  </div>`)</script>;";
         exit(); 
      }
  
    $update_query="UPDATE `item` SET `item_name`='$name1',
    `category`='$category1',`description`='$description1',`buy`='$buy1',`sell`='$sell1' WHERE item_id ='$no1'";
    $result2=mysqli_query($connection,$update_query);
    if($result2){
      $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
      if ($check_effect_row==1) {  
          echo "<script>console.log('update success ful')</script>";        
          echo "<script>window.location.reload()</script>";  
          echo "<script>alert(`Customer  Details Updated`)</script>";       
    }else{
      echo "<script>console.log('affected failed')</script>";
    }
  }else{
    echo "<script>console.log('update failed')</script>";
  }
  
  

?>