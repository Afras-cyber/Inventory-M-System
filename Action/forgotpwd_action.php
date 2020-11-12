<?php
include('../inc/connection.php');
    echo "<script>console.log('Change Button work')</script>";
    // $ch_user_id    =$_POST['ch_user'];
    $ch_email      =$_POST['ch_email'];
    $ch_pass       =$_POST['ch_pass'];
    $ch_pass2      =$_POST['ch_pass2'];
    $encrypt=md5($ch_pass);
    
    $name="/^[a-zA-Z ]*$/";
	$emailValidatiaon="/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2.4})$/";
	$number ="/^[0-9]+$/";
    
    if (!filter_var($ch_email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
          echo "<script>$('#message2').html(`
          <div class='alert alert-warning'>
                  <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                  &times;</a><b>$emailErr</b> 
                  </div>`)</script>";
     exit();
      }
      
   
      echo "<script>console.log('email okay')</script>";
if(strlen($ch_pass)<4 && strlen($ch_pass2)<4 ){
    $nameErr = "password is weak";
   echo "<script>$('#message2').html(`
   <div class='alert alert-warning'>
           <a herf=# class='close' data-dismiss='alert' aria-label='close'>
           &times;</a><b>$nameErr</b>     </div>`)</script>";
   exit();
}
    if ($ch_pass!==$ch_pass2) {//check password matching
        echo "<script>$('#message2').html(`
        <div class='alert alert-danger'>
                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                &times;</a><b>Password not match</b></div>`)</script>";exit();
    }  else {
        $checkUserID="SELECT * FROM `admin` WHERE `email`='$ch_email'";
        $checkUIDQuery=mysqli_query($connection,$checkUserID);    
        $count_user = mysqli_num_rows($checkUIDQuery);
        if($count_user>0){            
                    $sql2="UPDATE `admin` SET `password`='$encrypt' WHERE `email` ='$ch_email'";        
                    $query=mysqli_query($connection,$sql2);
                    if($query){
                      $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
                      if ($check_effect_row==1) {        
                      echo "<script>alert('Check success ful')</script>";  
                      echo "<script>window.location.href = 'index.php'</script>";
                      exit();

                    }else{
                      echo "<script>console.log('check failed')</script>";
                    }
                  }                 
        }else{
            
        	$nameErr="your account not found";
        	echo "<div class='alert alert-danger'>
        			<a herf=# class='close' data-dismiss='alert' aria-label='close'>
        			&times;</a><b>$nameErr</b> ";
        	exit();
            

        }
    }

?>