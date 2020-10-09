<?php
    //importing conection file
    include('inc/connection.php');

    //insert into database
    if(isset($_POST['submit'])){
      $cust_id      =   $_POST['cust_id'];
      $cust_name    =   $_POST['cust_name'];
      $contect_no   =   $_POST['contect'];
      $address1     =   $_POST['addrsss1'];
      $address2     =   $_POST['addrsss2'];
      $address      =   $address1+$address2;
      $email        =   $_POST['email'];

      $sql="INSERT INTO `customer` (`cust_id`, `customer_uid`, `cust_name`, `contect_no`, `address`, `email`) VALUES (NULL, '$cust_id', '$cust_name', '$contect_no', '$address', '$email')";
      $check_query=mysqli_query($connection,$sql);
      if($check_query){
          echo "<script>console.log('query succesfully inserted')</script>";
      }
      else{
          echo "<script>console.log('query insert failed')</script>";
      }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>  <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="css/item.css"> 
    <link rel="stylesheet" href="css/customer.css">

</head>
<body>
<div class="container-fluid" >
    <div class="row bannger-head">
        <div class="col-12 banner-tag">
            <div class="top-banner">
                <img src="res/img/logo.png" alt="LOGO"  class="logo">
                <h1 id="head-title">Customer</h1>                
            </div>            
         </div>    
    </div><br/>    
</div>
<div class="add-item-form box2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-5 table2">
                <form action="">
                    <div>
                        <div class="row">
                            <div class="col-3"><label class="label">Customer ID</label></div>
                            <div class="col-8"><input type="text" name="cust_id"class="input_invoice" placholder="CUST002" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Customer Name</label></div>
                            <div class="col-8"><input type="text" name="cust_name"class="input_invoice" placeholder="Wall hugn Basin" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Contect No</label></div>
                            <div class="col-8"><input type="number"name="contect" class="input_invoice" placeholder="07XXXXXXXX" require />
                            </div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Address</label></div>
                            <div class="col-6"> 
                            <input type="text" class="input_invoice addy"name="addrsss1" placeholder="Line 01" require />
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6"> 
                            <input type="text" class="input_invoice addy"name="addrsss2" placeholder="Line 02">
                            </div>
                            
                        </div>
<p><br/></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Email</label></div>
                            <div class="col-3"><input type="email" class="input_invoice emiy"name="email" placeholder="abc@gmail.com" require /></div>
                        </div><p><br></p>
                  >
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit ">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit " type="submit" name="submit">Add</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit ">Delete</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit ">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
           <div class="col-7 table1">
           <table>                   
                    <tr>
                        <th class="lefty" >               </th>
                        <th>Cust No         </th>
                        <th>Cust Name       </th>
                        <th>Contect No        </th>
                        <th class="rightx">Address </th>
                        
                        <th class="righty rightx">Email    </th> 
                    </tr>
                    <br>                    
                    <tr>
                        <td class="lefty" >1              </td>
                        <td>cust0012</td>
                        <td class="namey">sam      </td>
                        <td>0712345678      </td>
                        <td Class="rightx">No 21 Jaela       </td>
                        <td class="righty rightx" >sam@mail.com </td> 
                    </tr>              </table>
           <div>
              
            </div></div>
        </div>
    </div>
</div>

<p><br></p>
<p><br></p>
</body>
</html>