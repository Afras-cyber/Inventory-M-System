<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--Internal Links-->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/item.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 border border-primary login">
      <form action="">
        <center><h1 id="title-tag">Admin</h1>       
        <input autocomplete=off class="input-tag" type="email" name="email" placeholder="E-mail">
        <input class="input-tag" type="password" name="password" placeholder="Password"><br>
        <input class="btn btn-fm" type="submit" value="Login"><br>
        <a class="forgot-pass"href="#" data-toggle="modal" data-target="#exampleModalCenter" >Forgot password ?</a></center> 
      </form>
      
      </div>
      <div class="col-4"></div>
      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title forgot-password" id="exampleModalLongTitle">Forget Passsword&nbsp;&nbsp; ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div id="message2"></div>
                    <form action="admin.php" method="POST" id="fgotpwdfm">
                  
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
                            <!-- <div class="set-right">
                                <button class="btn btn-lg btn-submit" type="rest">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit" type="button" id="fgotpwd"name="change">
                                    Change
                                </button>
                            </div> -->
                            <div class="modal-footer">
                              <button type="button" class=" btn btn-lg btn-submit" data-dismiss="modal">Close</button>
                              <button type="button" class=" btn btn-lg btn-submit" id="fgotpwd"name="change">Save changes</button>
                            </div>
                            </form>
                           
                        </div>

                        <div></div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <p><br /></p>
<script src="js/admin.js"></script>
    <p><br /></p>
</body>
</html>