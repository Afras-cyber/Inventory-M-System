<?php
    include('inc/connection.php');
     session_start();      
if(!isset($_SESSION['email'])){   
	header('location:index.php');
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!--JavaScript Links-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--CSS Links-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/homeSale.css">
    <link rel="stylesheet" href="css/sideBar.css">

</head>

<body>
    <div>
        <div class="side-bar-icon">
            <!-- <input type="checkbox" id="check">
        <label for="check" id="sidebar-label">          
            </label> -->
            <button type="button" style="background: #EE6342;border:0px solid #EE6342;" class="btn btn-primary"
                id="myBtn" data-toggle="modal1" data-target="#exmpleModal">
                <i class="fas fa-bars" id="btn"></i>

            </button>
        </div>
        <!-- The Modal -->
        <div id="myModal" class="modal1">
            <!-- Modal content -->
            <div class="modal-content" style="border:0">
                <span class="close"></span>
                <div class="sidebar">
                    <ul>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="customer.php">Customer</a></li>
                        <li><a href="supplier.php">Supplier</a></li>
                        <li><a href="item.php">Items</a></li>
                        <!-- <li><a href="#">Transports</a></li> -->
                        <li><a href="orderForm.php">Orders</a></li>
                        <li><a href="salesInfo.php">Sales</a></li>
                        <li><a href="purchaseInfo.php">Purchase</a></li>
                        <li><a href="return_item.php">Returned Items</a></li>
                        <li><a href="logout.php">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row bannger-head">
            <div class="col-9 banner-tag">
                <div class="top-banner">
                    <img src="res/img/logo.png" alt="LOGO" class="logo">
                    <h1 id="head-title">THE SENSITVE QUALITY IN THE BATHROOM</h1>
                    <h3 id="head-sub">The accessories to enrich the bathrooms with elengance and functionality</h3>
                </div>
                <div class="bottom-banner">
                    <div class="container">
                        <div class="list-order">
                            <div id='showCat'></div>
                            <!-- <button class="btn  btn-item" id="add-item" data-toggle="modal"
                                data-target="#exampleModal">+</button> -->
                            <!-- add category -->

                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title label" id="exampleModalLabel">Add New Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <form id="catForm" method="post">
                                                    <span class="text-sm"><i>Category Name</i></span><br>
                                                    <input autocomplete="off" name="newCategory" id="newCategory"
                                                        type="text" placeholder="Shower.." class="form-control"
                                                        required />

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" name="submit_category1" id='addCat'
                                                style="background: #EE6342;border:0px solid #EE6342;"
                                                class="btn btn-primary">Add Category</button> </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-3 img-tag">
                <img src="res/img/sidePIC.jpg" alt="">
            </div>
        </div><br /><br>
    </div>
    <div class="container-fluid sale-for-sale">

        <form id="form_invoice" name="set"action="home.php" method="POST">
            <h1 id="sale_INVOICE"> Sale Invoice</h2>
                <div id="message01"></div><br>
                <div class="row ">
                    <div class="col-3"><label class="label">Item No</label><input type="text" id="item_no"class="input_invoice ivForm"
                            autocomplete="off" placeholder="HGF0013" name="itm_no" required />
                            <div id="listOfItem"></div>
                        </div>
                    <div class="col-3"><label class="label">Item Name</label><input type="text" id="itm_name"  class="input_invoice ivForm"
                            autocomplete="off" placeholder="Wall hang Basin" name="itm_name"></div>
                    <div class="col-3"><label class="label">Qty</label><input type="number" id="itm_qty" class="input_invoice ivForm"
                            autocomplete="off" placeholder="3" name="qty"></div>
                    <div class="col-3"><label class="label">Price</label><input type="number" id="item_price" class="input_invoice ivForm"
                            autocomplete="off" placeholder="LKR 20000" name="price"></div>
                </div>
          
                
                <br>               

                <div class="row">
                    <div class="col-3"><label class="label">C. Name</label><input type="text" autocomplete="off"
                            class="input_invoice ivForm" placeholder="Sam" id ="cust_name" name="cust_name"></div>
                    <div class="col-3"><label class="label">C. Email</label><input type="email" class="input_invoice ivForm"
                    autocomplete="on" placeholder="abc@emai.com" id ="custEmail" name="custEmail"></div>
                     <div class="col-3"><label class="label">Discount</label><input type="number" id="discount"class="input_invoice ivForm"
                            autocomplete="off" placeholder="LKR 5000"  name="discount"></div>
                  
                    <div class="col-1"><input type="button" id="enterToInvoice" class="btn btn-lg btn-submit"
                            value="Enter"></div>
                            <div class="col-1"></div>
                </div>

        </form>
    </div>
    <p><br /></p>
    <center>
        <div class="table1">
            <caption>
                <h3></h3>
            </caption>
            <div id="rowOfInvoice"></div>         
        </div>
        <p><br /></p>
        <div class="table2">
            <h5>Total Price</h5>&nbsp;&nbsp;:&nbsp;&nbsp;LKR&nbsp;
            <h5 id="total-price"></h5>
        </div>
    </center>
    <p><br /></p>
    <div>

       <form method="POST" action="File/print.php">
        <div class="container">         
            <div class="set-right">
                <button type="button" id="clearAllTable"class="btn btn-lg btn-submit">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-lg btn-submit" id ='printDoc'>Print</button>
            </div>
              </form>
        </div>
        <p><br /></p>
        <p><br /></p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/home.js"></script>       
        <p><br /></p>
    </div>
</body>
</html>