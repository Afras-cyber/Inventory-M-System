<?php
session_start();
if(!isset($_SESSION['email'])){
    echo $_SESSION['email'];
	header('location:index.php');
}
?>
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
            </div>
        </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <p><br /></p>
<script src="js/admin.js"></script>
    <p><br /></p>
</body>


</html>