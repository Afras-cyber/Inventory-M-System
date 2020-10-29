<?php
	//conncetion elements
	$localhost  ='localhost';
	$host_user  ='root';
	$host_pwd   ='';
	$db_name    ='inventory';
	//connection method
	$connection=mysqli_connect($localhost,$host_user,$host_pwd);
	//$db_connection=mysqli_select_db($connection,$db_name);
	$check_db= mysqli_select_db($connection,$db_name);
	 if (!$connection){
		 die("Connection Failed :".mysqli_connect_errno());
	 }
    //else {echo"connected";}
?>

