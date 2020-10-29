
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="css/item.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<div class="container-fluid" style="padding:0;">
        <div class="row bannger-head">
            <div class="col-12 banner-tag">
                <div class="top-banner">
                    <a href="home.php">
                        <img src="res/img/logo.png" alt="LOGO" class="logo" />
                    </a>
                    <h1 id="head-title">Admin</h1>
                </div>
            </div>
        </div>
        <br />
    </div>
    <div class="add-item-form box2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 table2">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div id="message1"></div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <form  id="adAdmin" method="POST" >
                        <div>
                            <div class="row">
                                <div class="col-3"><label class="label">User ID</label></div>
                                <div class="col-8">
                                    <input autocomplete="off" autocomplete="off" type="text" name="user" id="user"
                                        class="input_invoice adduser" placeholder="USER002" required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">Full Name</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="fullname" class="input_invoice adduser" placeholder="Sam J watson"
                                        required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">Contect No</label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="contect" class="input_invoice adduser" placeholder="07XXXXXXXX"
                                        required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Email</label></div>
                                <div class="col-3">
                                    <input type="email" name="emailed" class="input_invoice emiy adduser"
                                        placeholder="abc@gmail.com" required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Password</label></div>
                                <div class="col-6">
                                    <input type="password" name="pass" class="input_invoice adduser" placeholder="**********"
                                        required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">re-enter Password</label>
                                </div>
                                <div class="col-6">
                                    <input type="password" name="pass2" class="input_invoice adduser" placeholder="**********"
                                        required />
                                </div>
                            </div>
                            <p><br /></p>

                            <div class="set-right">
                                <button class="btn btn-lg btn-submit" type="rest">
                                    Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit"id="addNewAdmin" type="submit" name="submit">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-6 table1">
                    <div id="message2"></div>
                    <form action="admin.php" method="POST" id="fgotpwdfm">
                        <h4 class="forgot-password">Forget Passsword&nbsp;&nbsp; ?</h4>
                        <div class="forgot-password-box">
                            <div class="row">
                                <div class="col-3"><label class="label">User ID</label></div>
                                <div class="col-8">
                                    <input type="text" name="ch_user" class="input_invoice checkUser" placeholder="USER002"
                                        required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Email</label></div>
                                <div class="col-3">
                                    <input autocomplete="off" type="email" name="ch_email" class="input_invoice emiy checkUser"
                                        placeholder="abc@gmail.com" required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Password</label></div>
                                <div class="col-6">
                                    <input type="password" name="ch_pass" class="input_invoice checkUser" placeholder="**********"
                                        required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">re-enter Password</label>
                                </div>
                                <div class="col-6">
                                    <input type="password" name="ch_pass2" class="input_invoice checkUser"
                                        placeholder="**********" required />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="set-right">
                                <button class="btn btn-lg btn-submit" type="rest">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit" type="button" id="fgotpwd"name="change">
                                    Change
                                </button>
                            </div>
                        </div>

                        <div></div>
                </div> -->
            </div>
        </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <p><br /></p>
<script src="js/admin.js"></script>
    <p><br /></p>
</body>

<?php


//     include('inc/connection.php');
// if (isset($_POST['submit'])) {
//     echo "<script>console.log('Submit Button work')</script>";
//     $user_id1    =$_POST['user'];
//     $fullname   =$_POST['fullname'];
//     $contect    =$_POST['contect'];
//     $email1     =$_POST['email'];
//     $pass       =$_POST['pass'];
//     $pass2      =$_POST['pass2'];

//     $name="/^[a-zA-Z ]*$/";
// 	$emailValidatiaon="/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2.4})$/";
// 	$number ="/^[0-9]+$/";

//     if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Invalid email format";
//           echo "<script>$('#message1').html(`
//           <div class='alert alert-warning'>
//                   <a herf=# class='close' data-dismiss='alert' aria-label='close'>
//                   &times;</a><b>$emailErr</b> 
//                   </div>`)</script>;";

//       }
      
// if (!preg_match($name,$fullname)) {
//     $nameErr = "Only letters and white space allowed";
//       echo "<script>$('#message1').html(`
//       <div class='alert alert-warning'>
//               <a herf=# class='close' data-dismiss='alert' aria-label='close'>
//               &times;</a><b>$nameErr</b>
//               </div>`)</script>;";
      
//   }

  
// if(strlen($pass)<4 && strlen($pass2)<4 ){
//     $nameErr = "password is weak";
//    echo "<script>$('#message1').html(`
//    <div class='alert alert-warning'>
//            <a herf=# class='close' data-dismiss='alert' aria-label='close'>
//            &times;</a><b>$nameErr</b>     </div>`)</script>;";
   
// }
// if(!(strlen($contect) <10 && !strlen($contect)>10)){
//     echo "<script>$('#message1').html(`
//     <div class='alert alert-warning'>
//             <a herf=# class='close' data-dismiss='alert' aria-label='close'>
//             &times;</a><b>contect no not valid</b>     </div>`)</script>;";
// }
//     if ($pass!==$pass2) {//check password matching
//         echo "<script>$('#message1').html(`
//         <div class='alert alert-danger'>
//                 <a herf=# class='close' data-dismiss='alert' aria-label='close'>
//                 &times;</a><b>Password not match</b></div>`)</script>;";
//     } else {
//         $sql="INSERT INTO `admin` (`admin_id`, `user_id`, `fullname`, `contect`, `email`, `password`) 
//                                  VALUES (NULL, '$user_id1', '$fullname', '$contect', '$email1', '$pass')";
        
//         $query=mysqli_query($connection,$sql);
//         if ($query) {
//             echo "<script>console.log('Query Insert Successfully')</script>";
//         } else {
//             echo "<script>console.log('Query Insert failed')</script>";
//         }
//     }
// }
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
</html>