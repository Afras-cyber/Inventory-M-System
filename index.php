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
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 border border-primary login">
      <form action="">
        <center><h1 id="title-tag">Admin</h1>       
        <input class="input-tag" type="email" name="email" placeholder="E-mail">
        <input class="input-tag" type="password" name="password" placeholder="Password"><br>
        <input class="btn btn-fm" type="submit" value="Login"><br>
        <a class="forgot-pass"href="#">Forgot password ?</a></center> 
      </form>
      
      </div>
      <div class="col-4"></div>
    </div>
  </div>
</body>
</html>