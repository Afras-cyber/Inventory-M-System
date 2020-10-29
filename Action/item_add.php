<?php
include('../inc/connection.php');

    $no         =$_POST['item_id'];
    $name1       =$_POST['item_name'];
    $category   =$_POST['category'];
    $description=$_POST['description'];
    $buy        =$_POST['buy_price'];
    $sell       =$_POST['sale_price'];

    $test=strval($no);

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
  
    
   $seach_sql="SELECT * FROM `item` WHERE item_id ='$test'";
   $check_query2=mysqli_query($connection,$seach_sql);
   if($check_query2){  
      if(mysqli_num_rows($check_query2)>0){
        $nameErr="This Item  already available You can only edit their profile";
    echo "<script>$('#message1').html(`
    <div class='alert alert-warning'>
            <a herf=# class='close' data-dismiss='alert' aria-label='close'>
            &times;</a><b>$nameErr</b>     </div>`)</script>;";
      exit();
       }
      else{
         $sql="INSERT INTO `item` (`item_qid`, `item_id`, `item_name`, `category`,  `description`, `buy`, `sell`) 
         VALUES (NULL, '$no', '$name1', '$category', '$description', '$buy', '$sell');";
         $check_query=mysqli_query($connection, $sql);
             if ($check_query) {
                 echo "<script>console.log('query succesfully inserted')</script>";
                 echo "<script>window.location.reload()</script>";
             } else {
                 echo "<script>console.log('query insert failed')</script>";
             }
       }
   }else{
    echo "<script>console.log('find search query insert failed')</script>";
   }  


?>