<?php
  include('inc/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
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
                    <h1 id="head-title">Customer</h1>
                </div>
            </div>
        </div><br />
    </div>
    <div class="add-item-form box2">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-5 table2">
                    <form id="form" method="POST">
                        <div id="message1"></div>
                        <div>
                            <div class="row">
                                <div class="col-3"><label class="label">Customer ID</label></div>
                                <div class="col-8"><input type="text" autocomplete="off" id="cust_uid" name="cust_uid"
                                        class="input_invoice custAdd" placholder="CUST002" require /></div>
                            </div>
                            <p><br></p>
                            <div class=row>
                                <div class="col-3"></div>
                                <div class="col-3">
                                    <div id='list_item'></div>
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Customer Name</label></div>
                                <div class="col-8"><input type="text" id="cust_name" name="cust_name"
                                        class="input_invoice custAdd" placeholder="Wall hugn Basin" require /></div>
                            </div>
                            <p><br></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Contect No</label></div>
                                <div class="col-8"><input type="number" id="contect" name="contect"
                                        class="input_invoice custAdd" placeholder="07XXXXXXXX" require />
                                </div>
                            </div>
                            <p><br></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Address</label></div>
                                <div class="col-6">
                                    <input type="text" id="address1" class="input_invoice addy custAdd" name="addrsss1"
                                        placeholder="Line 01" require />
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <input type="text" id="address2" class="input_invoice addy" name="addrsss2"
                                        placeholder="Line 02">
                                </div>

                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Email</label></div>
                                <div class="col-3"><input id="email_id" type="email" class="input_invoice emiy custAdd"
                                        name="email" placeholder="abc@gmail.com" require /></div>
                            </div>
                            <p><br></p>

                            <div class="set-right">
                                <button class="btn btn-lg btn-submit "
                                    type="rest">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit " id='custAddBtn' type="submit"
                                    name="submit">Add</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit " id="custEditBtn"
                                    name="edit_cust">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit " id="deleteCustomer">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-7 table1">
                    <table>
                        <tr>
                            <th class="lefty"> </th>
                            <th>Cust No </th>
                            <th>Cust Name </th>
                            <th>Contect No </th>
                            <th class="rightx">Address </th>

                            <th class="righty rightx">Email </th>
                        </tr>
                        <br>
                        <!-- <tr>
                        <td class="lefty" >1              </td>
                        <td>cust0012</td>
                        <td class="namey">sam      </td>
                        <td>0712345678      </td>
                        <td Class="rightx">No 21 Jaela       </td>
                        <td class="righty rightx" >sam@mail.com </td> 
                    </tr>   -->
                        <?php
                    $sql2="SELECT * FROM `customer` ORDER BY `customer_uid` ASC;";
                    $fetch_query=mysqli_query($connection, $sql2);
                    $count_rows=mysqli_num_rows($fetch_query);
                    if ($count_rows>0) {
                        $i=0;
                        while ($row=mysqli_fetch_assoc($fetch_query)) {
                            $i++;
                            $sh_customer_uid    =$row['customer_uid'];
                            $sh_cust_name       =$row['cust_name'];                      
                            $sh_contect_no      =$row['contect_no'];
                            $sh_address         =$row['address'];
                            $sh_address2        =$row['address2'];
                            $sh_fulAddress      =$sh_address." ".$sh_address2;
                            $sh_email           =$row['email'];
                        
                            echo "<tr>
                            <td class='lefty'>{$i}</td>
                            <td>{$sh_customer_uid}</td>
                            <td class='namey'>{$sh_cust_name}</td>
                            <td>{$sh_contect_no}</td>
                            <td Class='rightx'>{$sh_fulAddress}</td>
                            <td class='righty rightx'>{$sh_email}</td> 
                        </tr>";
                        }
                    }

                    ?>
                    </table>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/customer.js"></script>
    <p><br></p>
    <p><br></p>
</body>

</html>