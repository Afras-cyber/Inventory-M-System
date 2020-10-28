<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order From</title>
    <!--JavaScript Links-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--CSS Links-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/orderForm.css">


</head>

<body>
    <div class="container-fluid" style="padding:0;">
        <div class="row bannger-head">
            <div class="col-12 banner-tag">
                <div class="top-banner">
                <a href="home.php">
                    <img src="res/img/logo.png" alt="LOGO" class="logo" />
                </a>
                    <h1 id="head-title">Order Form</h1>
                </div>
            </div>
        </div><br />
    </div>
    <div class="container-fluid sale-for-sale">

        <form action="">
            <h1 id="sale_INVOICE"> Order Invoice</h2><br>
                <div class="row ">
                    <div class="col-3"><label class="label">Item No</label><input type="text" class="input_invoice"
                            name="itm-no"></div>
                    <div class="col-3"><label class="label">Item Name</label><input type="text" class="input_invoice"
                            name="itm-name"></div>
                    <div class="col-3"><label class="label">Qty</label><input type="number" class="input_invoice"
                            name="qty"></div>
                    <div class="col-3"><label class="label">Price</label><input type="number" class="input_invoice"
                            name="price"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4"><label class="label">Supplier Name</label><input type="number"
                            class="input_invoice" name="cust_name"></div>
                    <div class="col-4"><label class="label">Supplier ID</label><input type="number"
                            class="input_invoice" name="cust_id"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="submit" class="btn btn-lg btn-submit" value="Enter"></div>
                </div>

        </form>
    </div>
    <p><br /></p>
    <center>
        <div class="table1">
            <table>
                <tr>
                    <th class="left-side "></th>
                    <th class="item_no">Item No </th>
                    <th class="nameValue">Item Names </th>
                    <th class="right-side">Qty</th>
                    <td class="right-side-btn rm-top"></td>
                </tr>
                <tr>
                    <td class="left-side">1 </td>
                    <td class="item_no">He34r </td>
                    <td class="nameValue">5 </td>
                    <td class="right-side"> </td>
                    <td class="right-side-btn "><button class="rm-item"><i class="fas fa-minus-circle"></i></button>
                    </td>

                </tr>

            </table>

        </div>
        <p><br /></p>
        <div class="table2">
            <h5></h5>
            <h5 id="total-price"></h5>
        </div>

    </center>
    <p><br /></p>
    <div>

        <div class="container">

            <div class=" set-right">
                <button class="btn btn-lg btn-submit" type="rest">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-lg btn-submit" type="button">sent</button>
                <p><br /></p>
                <h5>Order Invoice Information</h5>
            </div>
        </div>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
    
        
    </div>
</body>
</html>