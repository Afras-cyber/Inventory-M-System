<?
include('../inc/connection.php');
      

$itm_no         = $_POST['itm_no'];
$itm_name       = $_POST['itm_name'];
$qty            = $_POST['qty'];
$price          = $_POST['price'];
$sup_name       = $_POST['sup_name'];
$sup_email      = $_POST['sup_email'];


$name="/^[a-zA-Z ]*$/";
    echo "<script>alert('Input filed are notempty')</script>";
    if (!filter_var($sup_email, FILTER_VALIDATE_EMAIL)) {
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
          echo "<div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$nameErr</b> ";
          exit();
      }
    
      
       $findSql="SELECT * FROM `item` WHERE item_id ='$itm_no'";
       $check_query2=mysqli_query($connection,$findSql);
       if($check_query2){  
          if(mysqli_num_rows($check_query2)>0){             
              $sql1="INSERT INTO `ordertb` (`o_id`, `itm_no`, `itm_name`, `qty`, `price`, `sup_name`, `sup_email`) 
              VALUES (NULL, '$itm_no', '$itm_name', '$qty', '$price', '$sup_name', '$sup_email');";
              $run_query1=mysqli_query($connection,$sql1);
              if($run_query1){  
                  
                    echo "<script>
                    $('.ivForm').text('');
                      alert('Item Added');
                    </script>" ;
               }
              
          }else{
            $nameErr = "Item Id wrong There no such a Item on list";
            echo "<div class='alert alert-warning'>
                    <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                    &times;</a><b>$nameErr</b> ";
            exit();

          }
        }
                                               
?>