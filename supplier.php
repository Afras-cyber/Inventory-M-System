<?php
  
    include('inc/connection.php');   

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
<div class="container-fluid" style="padding:0;">
    <div class="row bannger-head">
        <div class="col-12 banner-tag">
            <div class="top-banner">
            <a href="home.php">
                    <img src="res/img/logo.png" alt="LOGO" class="logo" />
                </a>
                <h1 id="head-title">Supplier</h1>                
            </div>            
         </div>    
    </div><br/>    
</div>
<div class="add-item-form box2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-5 table2">
            <div id="message1"></div>
                <form id='supplier_form' method="POST">
                    <div>
                        <div class="row">
                            <div class="col-3"><label class="label">Supplier ID</label></div>
                            <div class="col-8"><input type="text" autocomplete='off'id="sup_uid"name="sup_uid"class="input_invoice sup_in" placholder="SUP002" require /></div>
                        </div><p><br></p>
                        <div class=row>
                              <div class="col-3"></div>
                              <div class="col-5">
                              <div id ='list_supplier'></div>
                            
                              </div>
                              </div>
                              <p><br /></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Supplier Name</label></div>
                            <div class="col-8"><input type="text" id="sup_name"name="sup_name"class="input_invoice sup_in" placeholder="Wall hugn Basin" require /></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Contect No</label></div>
                            <div class="col-8"><input type="number"id="contect"name="contect" class="input_invoice sup_in" placeholder="07XXXXXXXX" require />
                            </div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Address</label></div>
                            <div class="col-6"> 
                            <input type="text" class="input_invoice addy sup_in"id="addrsss1"name="addrsss1" placeholder="Line 01" require />
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6"> 
                            <input type="text" class="input_invoice addy sup_in"id="addrsss2"name="addrsss2" placeholder="Line 02">
                            </div>
                            
                        </div>
<p><br/></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Email</label></div>
                            <div class="col-3"><input type="email" id="email_id"class="input_invoice emiy sup_in"name="email" placeholder="abc@gmail.com" require /></div>
                        </div><p><br></p>
                  
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit "type="rest">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit " type="submit"id="sup_addBtn" name="submit">Add</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit "type="submit" id="sup_editBtn"name="edit_supplier">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit "type="button" id="deleteSupplier">Delete</button>
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
                            $sh_sup_uid         =$row['sup_uid'];
                            $sh_sup_name        =$row['sup_name'];                      
                            $sh_contect_no      =$row['contect_no'];
                            $sh_address1         =$row['address'];
                            $sh_address2         =$row['address2'];
                            $sh_email           =$row['email'];
                            $sh_address         =$sh_address1." ".$sh_address2;
                        
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/supplier.js"></script>
<p><br></p>
<p><br></p>
</body>
</html>