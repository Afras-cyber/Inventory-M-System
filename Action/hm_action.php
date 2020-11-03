<?php
    include('../inc/connection.php');
      

    $item_no        = $_POST['itm_no'];
    $item_name      = $_POST['itm_name'];
    $qty            = $_POST['qty'];
    $price          = $_POST['price'];
    $cust_name      = $_POST['cust_name'];
    $cust_email     = $_POST['custEmail'];
    $discount       = $_POST['discount'];
    $value          =(float)$price-(float)$discount;
    $changeInQty    = (int)$qty;
    
//--------------------------------------------------------
$name="/^[a-zA-Z ]*$/";

    echo "<script>alert('Input filed are notempty')</script>";
    if (!filter_var($cust_email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
          echo "<script>$('#message1').html(`
          <div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$emailErr</b> 
                  </div>`)</script>";
     exit();
      }
    
    if (!preg_match($name,$cust_name)) {
        $nameErr = "Only letters and white space allowed";
          echo "<div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$nameErr</b> ";
          exit();
      }
    
      
    //   
    //      
              
    //                      
       $findSql="SELECT * FROM `item` WHERE item_id ='$item_no'";
       $check_query2=mysqli_query($connection,$findSql);
       if($check_query2){  
          if(mysqli_num_rows($check_query2)>0){
            if($rowsQty = mysqli_fetch_assoc($check_query2)){
                $rwQty= $rowsQty['qty'];
                $changeQty=(int)$rwQty;
                if($changeQty>0){
                    //---------------------------------------------------------------------------               
                    $newQty = $changeQty-$changeInQty;
                    $update_query="UPDATE `item` SET `qty`='$newQty' WHERE item_id ='$item_no' ";
                    $result2=mysqli_query($connection,$update_query);
                    if($result2){
                        $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
                        if ($check_effect_row==1) {  
                            $sql_check1="SELECT * FROM `customer` WHERE email = '$cust_email' LIMIT 1";
                            $return1 = mysqli_query($connection,$sql_check1);
                            if($return1){
                                if($rows1 = mysqli_fetch_assoc($return1)){
                                              $custID=$rows1['customer_uid'];
                                              $sql="INSERT INTO `invoice_hmT` (`item_no`, `item_name`, `qty`, `price`, `customer_name`,`email`, `customer_id`,`discount`,`value`) 
                                              VALUES ('$item_no', '$item_name', '$qty', '$price', '$cust_name','$cust_email','$custID','$discount','$value')";
                                              $run_query=mysqli_query($connection,$sql);
                                              if($run_query){  
                                                  
                                                    echo "<script>
                                                    $('.ivForm').text('');
                                                      alert('Item Added');
                                                    </script>" ;
                                               }
                                }
                            }
                            else{
                                    echo "<script>console.log('search email query failed')</script>";
                                }
                            
                        }else{
                         echo "<script>console.log('affected failed')</script>";
                         }
                     
                
                    }else{
                        echo "<script>console.log('update query failed')</script>";
                    
                       }
                }else{
                    echo "<script>alert('No item avilable')</script>";
                }
            }
        }else{
            echo "<script>console.log('Item Not Found')</script>";
        }  
    }else{
        echo "<script>console.log('select item query failed')</script>";
    }



// }}
// }

 

?>