<?
include('inc/connection.php');

  $cust_uid_e      =   'cus003';
        $cust_name_e    =   "ad";
        $contect_no_e   =   00000;
        $address1_e     =   "dfasdf";
        $address2_e     =   "rtef";
        $address_e      =   "$address1_e+$address2_e";
        $email_e        =   "dfasdfsdf";
        //UPDATE `customer` SET `address`='work2' WHERE `customer_uid`='cus003'
$update_query="UPDATE `customer` SET `cust_name`='$cust_name_e', `address`='$address_e' WHERE `customer_uid`='$cust_uid_e'";
// $update_query="UPDATE `customer` SET `cust_name`=`$cust_name_e`,
// `contect_no`=`$contect_no_e`,`address`=`$address_e`,`email`=`$email_e` WHERE `customer_uid`='$cust_uid_e'";
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <button type='button'id="delete9">click me</button>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>s
  <script src="js/find.js"></script>
  </body>

</html>