<?php
include('../inc/connection.php');

  
    
      $email =$_POST['email'];
      $pwd = $_POST['password'];
                
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
                echo "<script>alert('$emailErr')</script>";
           exit();
            }
              $sql="SELECT * FROM `admin` WHERE `email`='$email'LIMIT 1";    
              $query=mysqli_query($connection,$sql);
              if($query){                
                if(mysqli_num_rows($query)>0){
                    if($row1=mysqli_fetch_assoc($query)){
                        $passwordCheck=$row1['password'] ;
                        if($pwd ==$passwordCheck){
                            echo "<script>window.location.href = 'home.php'</script>";
                        } else{
                            $nameErr = "Password Invalid";
                    echo "<script>alert('$nameErr')</script>";
                     exit(); 
                        }             
                    }
                }else{
                    $nameErr = "Email Address Invalid";
                    echo "<script>alert('$nameErr')</script>";
                     exit(); 
                }
  
              }else{
                  $nameErr = "Email or Password Incorrect check again";
                  echo "<script>alert('$nameErr')</script>";
                  exit(); 
              }
                  
  
        
      
    
     

?>