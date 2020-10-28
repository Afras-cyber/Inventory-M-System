<?php
    include('../inc/connection.php');


    $user_id1    =$_POST['user'];
    $fullname   =$_POST['fullname'];
    $contect    =$_POST['contect'];
    $email1     =$_POST['emailed'];
    $pass       =$_POST['pass'];
    $pass2      =$_POST['pass2'];
 
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
        $sql="INSERT INTO `admin` (`admin_id`, `user_id`, `fullname`, `contect`, `email`, `password`) 
                                 VALUES (NULL, '$user_id1', '$fullname', '$contect', '$email1', '$pass')";
        
        $query=mysqli_query($connection,$sql);
        if ($query) {
            echo "<script>console.log('Query Insert Successfully')</script>";
        } else {
            echo "<script>console.log('Query Insert failed')</script>";
        }
    }

// if (isset($_POST['change'])) {
//     echo "<script>console.log('Change Button work')</script>";
//     $ch_user_id    =$_POST['ch_user'];
//     $ch_email      =$_POST['ch_email'];
//     $ch_pass       =$_POST['ch_pass'];
//     $ch_pass2      =$_POST['ch_pass2'];
    

//     if ($ch_pass!==$ch_pass2) {//check password matching
//         echo "<script>console.log('password not matched')</script>";
//     } else {
//         $sql2="UPDATE `admin` SET `password`=$ch_pass WHERE user_id='2'";        
//         $query=mysqli_query($connection,$sql2);
//         if($query){
//           $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
//           if ($check_effect_row==1) {        
//           echo "<script>console.log('Check success ful')</script>";        
//         }else{
//           echo "<script>console.log('check failed')</script>";
//         }
//       }
      
//     }
// }

?>