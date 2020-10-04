<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>  <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="css/item.css"> 
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
<div class="container-fluid" >
    <div class="row bannger-head">
        <div class="col-12 banner-tag">
            <div class="top-banner">
                <img src="res/img/logo.png" alt="LOGO"  class="logo">
                <h1 id="head-title">Admin</h1>                
            </div>            
         </div>    
    </div><br/>    
</div>
<div class="add-item-form box2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 table2">
                <form action="">
                    <div>
                        <div class="row">
                            <div class="col-3"><label class="label">User ID</label></div>
                            <div class="col-8"><input type="text" class="input_invoice" placeholder="USER002" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Full Name</label></div>
                            <div class="col-8"><input type="text" class="input_invoice" placeholder="Sam J watson" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Contect No</label></div>
                            <div class="col-8"><input type="number" class="input_invoice" placeholder="07XXXXXXXX" require />
                            </div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Email</label></div>
                            <div class="col-3"><input type="email" class="input_invoice emiy" placeholder="abc@gmail.com" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Password</label></div>
                            <div class="col-6"> 
                            <input type="password" class="input_invoice " placeholder="**********" require />
                            </div>                            
                        </div>
                        <p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">re-enter Password</label></div>
                            <div class="col-6"> 
                            <input type="password" class="input_invoice " placeholder="**********" require />
                            </div>                            
                        </div>
<p><br/></p>
                       
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit ">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit ">Add</button>
                        </div>
                    </div>
                </form>
            </div>
           <div class="col-6 table1">
               <h4 class="forgot-password">Forget Passsword&nbsp;&nbsp; ?</h4>
               <div class="forgot-password-box">
               <div class="row">
                            <div class="col-3"><label class="label">User ID</label></div>
                            <div class="col-8"><input type="text" class="input_invoice" placeholder="USER002" require /></div>
                        </div><p><br></p>
                         <div class="row">               
                            <div class="col-3"><label class="label">Email</label></div>
                            <div class="col-3"><input type="email" class="input_invoice emiy" placeholder="abc@gmail.com" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Password</label></div>
                            <div class="col-6"> 
                            <input type="password" class="input_invoice " placeholder="**********" require />
                            </div>                            
                        </div>
                        <p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">re-enter Password</label></div>
                            <div class="col-6"> 
                            <input type="password" class="input_invoice " placeholder="**********" require />
                            </div>                            
                        </div>  <p><br></p>
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit ">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit ">Change</button>
                        </div>
               </div>
                         
           <div>
              
            </div></div>
        </div>
    </div>
</div>

<p><br></p>
<p><br></p>
</body>
</html>