<?php
include('inc/connection.php');
if (isset($_POST['submit'])) {
    echo "<script>console.log('Submit Button work')</script>";
    $user_id    =$_POST['user'];
    $fullname   =$_POST['fullname'];
    $contect    =$_POST['contect'];
    $email      =$_POST['email'];
    $pass       =$_POST['pass'];
    $pass2      =$_POST['pass2'];

    if ($pass!==$pass2) {//check password matching
        echo "<script>console.log('password not matched')</script>";
    } else {
        $sql="INSERT INTO `admin` (`admin_id`, `user_id`, `fullname`, `contect`, `email`, `password`) 
                                 VALUES (NULL, '$user_id', '$fullname', '$contect', '$email', '$pass')";
        
        $query=mysqli_query($connection, $sql);
        if ($query) {
            echo "<script>console.log('Query Insert Successfully')</script>";
        } else {
            echo "<script>console.log('Query Insert failed')</script>";
        }
    }
}
if (isset($_POST['change'])) {
    echo "<script>console.log('Change Button work')</script>";
    $ch_user_id    =$_POST['ch_user'];
    $ch_email      =$_POST['ch_email'];
    $ch_pass       =$_POST['ch_pass'];
    $ch_pass2      =$_POST['ch_pass2'];

    if ($ch_pass!==$ch_pass2) {//check password matching
        echo "<script>console.log('password not matched')</script>";
    } else {
        $sql2="UPDATE `admin` SET `email`= {$ch_email},`password`={$ch_pass} WHERE `user_id`={$ch_user_id}";
        
        $query=mysqli_query($connection, $sql2);
        $check_effect_row=mysqli_num_rows($query);//check How many Rows effected

        if ($check_effect_row===1) {
            echo "<script>console.log('Query update Successfully')</script>";
        } else {
            echo "<script>console.log('Query update failed')</script>";
        }
    }
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!--implemetn external Links-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="stylesheet" href="css/item.css" />
    <link rel="stylesheet" href="css/admin.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row bannger-head">
        <div class="col-12 banner-tag">
          <div class="top-banner">
            <img src="res/img/logo.png" alt="LOGO" class="logo" />
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
            <form action="admin.php" method="POST">
              <div>
                <div class="row">
                  <div class="col-3"><label class="label">User ID</label></div>
                  <div class="col-8">
                    <input
                      type="text"
                      class="input_invoice"
                      placeholder="USER002"
                      require
                    />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Full Name</label>
                  </div>
                  <div class="col-8">
                    <input
                      type="text"
                      class="input_invoice"
                      placeholder="Sam J watson"
                      require
                    />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Contect No</label>
                  </div>
                  <div class="col-8">
                    <input
                      type="number"
                      class="input_invoice"
                      placeholder="07XXXXXXXX"
                      require
                    />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3"><label class="label">Email</label></div>
                  <div class="col-3">
                    <input
                      type="email"
                      class="input_invoice emiy"
                      placeholder="abc@gmail.com"
                      require
                    />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3"><label class="label">Password</label></div>
                  <div class="col-6">
                    <input
                      type="password"
                      class="input_invoice"
                      placeholder="**********"
                      require
                    />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">re-enter Password</label>
                  </div>
                  <div class="col-6">
                    <input
                      type="password"
                      class="input_invoice"
                      placeholder="**********"
                      require
                    />
                  </div>
                </div>
                <p><br /></p>

                <div class="set-right">
                  <button class="btn btn-lg btn-submit" type="rest">
                    Clear</button
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                  <button
                    class="btn btn-lg btn-submit"
                    type="submit"
                    name="submit"
                  >
                    Add
                  </button>
                </div>
              </div>
            </form>
    </div>
    <div class="col-6 table1">
        <form action="admin.php" method="POST">
            <h4 class="forgot-password">Forget Passsword&nbsp;&nbsp; ?</h4>
            <div class="forgot-password-box">
              <div class="row">
                <div class="col-3"><label class="label">User ID</label></div>
                <div class="col-8">
                  <input
                    type="text"
                    class="input_invoice"
                    placeholder="USER002"
                    require
                  />
                </div>
              </div>
              <p><br /></p>
              <div class="row">
                <div class="col-3"><label class="label">Email</label></div>
                <div class="col-3">
                  <input
                    type="email"
                    class="input_invoice emiy"
                    placeholder="abc@gmail.com"
                    require
                  />
                </div>
              </div>
              <p><br /></p>
              <div class="row">
                <div class="col-3"><label class="label">Password</label></div>
                <div class="col-6">
                  <input
                    type="password"
                    class="input_invoice"
                    placeholder="**********"
                    require
                  />
                </div>
              </div>
              <p><br /></p>
              <div class="row">
                <div class="col-3">
                  <label class="label">re-enter Password</label>
                </div>
                <div class="col-6">
                  <input
                    type="password"
                    class="input_invoice"
                    placeholder="**********"
                    require
                  />
                </div>
              </div>
              <p><br /></p>
              <div class="set-right">
                <button class="btn btn-lg btn-submit" type="rest">Clear</button
                >&nbsp;&nbsp;&nbsp;&nbsp;
                <button
                  class="btn btn-lg btn-submit"
                  type="submit"
                  name="change"
                >
                  Change
                </button>
              </div>
            </div>

            <div></div>
          </div>
        </div>
      </div>
    </form>
    </div>

    <p><br /></p>
    <p><br /></p>
  </body>
</html>
