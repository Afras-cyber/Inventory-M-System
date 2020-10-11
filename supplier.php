<?php
    //importing conection file
    include('inc/connection.php');

    //insert into database
    if(isset($_POST['submit'])){
      $sup_uid      =   $_POST['sup_uid'];
      $sup_name    =   $_POST['sup_name'];
      $contect_no   =   $_POST['contect'];
      $address1     =   $_POST['addrsss1'];
      $address2     =   $_POST['addrsss2'];
      $address      =   "$address1+$address2";
      echo "<script>console.log('$address1 + $address2 =$address')</script>";
      $email        =   $_POST['email'];

      $sql="INSERT INTO `supplier` (`sup_id`, `sup_uid`, `sup_name`, `contect_no`, `address`, `email`) 
      VALUES (NULL, '$sup_uid', '$sup_name', '$contect_no', '$address', '$email')";
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
    <title>Supplier</title>  <!--implemetn external Links-->
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
                <h1 id="head-title">Supplier</h1>                
            </div>            
         </div>    
    </div><br/>    
</div>
<div class="add-item-form box2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-5 table2">
                <form action="customer.php" method="POST">
                    <div>
                        <div class="row">
                            <div class="col-3"><label class="label">Supplier ID</label></div>
                            <div class="col-8"><input type="text" name="sup_uid"class="input_invoice" placholder="SUP002" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Supplier Name</label></div>
                            <div class="col-8"><input type="text" name="sup_name"class="input_invoice" placeholder="Wall hugn Basin" require /></div>
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
                  
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit "type="rest">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
                        <th class="lefty" ></th>
                        <th>Sup No</th>
                        <th>Sup Name</th>
                        <th>Contect No</th>
                        <th class="rightx">Address</th>                        
                        <th class="righty rightx">Email</th> 
                    </tr>
                    <br>
                    <?php
                    $sql2="SELECT * FROM `supplier`";
                    $fetch_query=mysqli_query($connection, $sql2);
                    $count_rows=mysqli_num_rows($fetch_query);
                    if ($count_rows>0) {
                        $i=0;
                        while ($row=mysqli_fetch_assoc($fetch_query)) {
                            $i++;
                            $sh_sup_uid    =$row['sup_uid'];
                            $sh_sup_name       =$row['sup_name'];                      
                            $sh_contect_no      =$row['contect_no'];
                            $sh_address         =$row['address'];
                            $sh_email           =$row['email'];
                        
                            echo "<tr>
                            <td class='lefty'>{$i}</td>
                            <td>{$sh_sup_uid}</td>
                            <td class='namey'>{$sh_sup_name}</td>
                            <td>{$sh_contect_no}</td>
                            <td Class='rightx'>{$sh_address}</td>
                            <td class='righty rightx'>{$sh_email}</td> 
                        </tr>";
                        }
                    }

                    ?>
                                </table>
           <div>
              
            </div></div>
        </div>
    </div>
</div>

<p><br></p>
<p><br></p>
</body>
</html>