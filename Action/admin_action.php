<?php
    include('../inc/connection.php');

    $user_id1    =$_POST['user'];
    $fullname   =$_POST['fullname'];
    $contect    =$_POST['contect'];
    $email1     =$_POST['emailed'];
    $pass       =$_POST['pass'];
    $pass2      =$_POST['pass2'];
    $securePWD  =md5($pass);
    $name="/^[a-zA-Z ]*$/";
	$emailValidatiaon="/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2.4})$/";
	$number ="/^[0-9]+$/";
    
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
          echo "<script>$('#message1').html(`
          <div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$emailErr</b> 
                  </div>`)</script>;";
     exit();
      }
      
   
    

if (!preg_match($name,$fullname)) {
    $nameErr = "Only letters and white space allowed";
      echo "<script>$('#message1').html(`
      <div class='alert alert-warning'>
              <a herf=# class='close' data-dismiss='alert' aria-label='close'>
              &times;</a><b>$nameErr</b>
              </div>`)</script>;";
     exit(); 
  }

  
if(strlen($pass)<4 && strlen($pass2)<4 ){
    $nameErr = "password is weak";
   echo "<script>$('#message1').html(`
   <div class='alert alert-warning'>
           <a herf=# class='close' data-dismiss='alert' aria-label='close'>
           &times;</a><b>$nameErr</b>     </div>`)</script>;";
   exit();
}
if(!(strlen($contect) <10 && !strlen($contect)>10)){
    echo "<script>$('#message1').html(`
    <div class='alert alert-warning'>
            <a herf=# class='close' data-dismiss='alert' aria-label='close'>
            &times;</a><b>contect no not valid</b>     </div>`)</script>;";exit();
}
    if ($pass!==$pass2) {//check password matching
        echo "<script>$('#message1').html(`
        <div class='alert alert-danger'>
                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                &times;</a><b>Password not match</b></div>`)</script>;";exit();
    } else {
        $sql_check1="SELECT * FROM `admin` WHERE email = '$email1' LIMIT 1";
        $return1 = mysqli_query($connection,$sql_check1);
        if($return1){
            if(mysqli_num_rows($return1)>0){
                $nameErr = "Already this email avilable";
                echo "<script>$('#message1').html(`
                <div class='alert alert-warning'>
                        <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                        &times;</a><b>$nameErr</b>     </div>`)</script>;";
                 exit();
            }else{
                $sql="INSERT INTO `admin` (`admin_id`, `user_id`, `fullname`, `contect`, `email`, `password`) 
                                         VALUES (NULL, '$user_id1', '$fullname', '$contect', '$email1', '$securePWD')";
                
                $query=mysqli_query($connection,$sql);
                if ($query) {
                    echo "<script>console.log('Query Insert Successfully')</script>";
                } else {
                    echo "<script>console.log('Query Insert failed')</script>";
                }

            }

        }
        //
    }


?>