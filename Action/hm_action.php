<?php
    include('../inc/connection.php');
      

$item_no = $_POST['itm-no'];
$item_name = $_POST['itm-name'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$cust_name = $_POST['cust_name'];
$cust_id = $_POST['cust_id'];

//--------------------------------------------------------
$name="/^[a-zA-Z ]*$/";



if (!preg_match($name,$cust_name)) {
    $nameErr = "Only letters and white space allowed";
      echo "<div class='alert alert-warning'>
              <a herf=# class='close' data-dismiss='alert' aria-label='close'>
              &times;</a><b>$nameErr</b> ";
      exit();
  }

 
	$sql="INSERT INTO `invoice_hmT` (`item_no`, `item_name`, `qty`, `price`, `customer_name`, `customer_id`) 
    VALUES ('$item_no', '$item_name', '$qty', '$price', '$cust_name', '$cust_id')";
	$run_query=mysqli_query($connection,$sql);
	
	if($run_query){
	
		echo "<script>
		window.location.href = 'home.php';
		alert('Success fully Register');
		</script>" ;
	}

?>