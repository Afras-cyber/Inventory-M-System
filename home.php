<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
 
</head>
<body>
<div class="container-fluid" >
    <div class="row bannger-head">
        <div class="col-9 banner-tag">
            <div class="top-banner">
                <img src="res/img/logo.png" alt="LOGO"  class="logo">
                <h1 id="head-title">THE SENSITVE QUALITY IN THE BATHROOM</h1>
                <h3 id="head-sub">The accessories to enrich the bathrooms with elengance and functionality</h3>
            </div>
             <div class="bottom-banner">
                 <div class="container">
                 <div class="list-order">
                    <button class="btn btn-lg btn-item">fdasfs</button>                    
                    <button class="btn btn-lg btn-item">fdasfs</button>  
                    <button class="btn btn-lg btn-item" id="add-item">+</button>
                </div>
                 </div>
                
            </div> 
         </div>
        
        <div class="col-3 img-tag">    
            <img src="res/img/sidePIC.jpg" alt="">
        </div>
    </div><br/>    
</div>
<div class="container-fluid sale-for-sale">

        <form action="">
            <h1 id="sale_INVOICE"> Sale Invoice</h2><br>
            <div class="row ">
                <div class="col-3"><label class="label">Item No</label><input type="text" class="input_invoice" name="itm-no"></div>
                <div class="col-3"><label class="label">Item Name</label><input type="text" class="input_invoice" name="itm-name"></div>
                <div class="col-3"><label class="label">Qty</label><input type="number" class="input_invoice" name="qty"></div>
                <div class="col-3"><label class="label">Price</label><input type="number" class="input_invoice" name="price"></div>
                </div>
                <br>
            <div class="row">
                <div class="col-4"><label class="label">Custmer Name</label><input type="number" class="input_invoice" name="cust_name"></div>
                <div class="col-4"><label class="label">Custmer ID</label><input type="number" class="input_invoice" name="cust_id"></div>                
                <div class="col-1"></div>
                <div class="col-1"><input type="submit" class="btn btn-lg btn-submit" value="Enter"></div>
            </div>           
            
        </form>
    </div>
<p><br/></p><center>
<div class="table1">
<caption><h3>Sale Invoice</h3></caption>
    <table>
      
        <tr>
            <th class="left-side">            </th>
            <th>Item No     </th>
            <th>Item Name   </th>
            <th>Qty         </th>
            <th>Price (LKR) </th>
            <th>Discount    </th>
            <th class="right-side">value(LKR)  </th>
            
        </tr>
        <tr>
            <td class="left-side">1       </td>
            <td>He34r   </td>
            <td>Janthi  </td>
            <td>5       </td>
            <td>2500LKR </td>
            <td>25%     </td>
            <td  class="right-side">3450    </td>
            <td  class="right-side-btn"><button class="rm-item"><i class="fas fa-minus-circle"></i></button></td>
        </tr>
     
    </table>
</div>
 <p><br /></p>
 <div class="table2">
    <h5>Total Price</h5>&nbsp;&nbsp;:&nbsp;&nbsp;
    <h5 id="total-price">43567</h5>
 </div>

</center>
<p><br /></p>
<div>
    
    <div class="container">
    <h4>Transports(optional)</h4>
    <p><br /></p>
    <div class="row">
        <div class="col-4"><label class="label">Transport Id :&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="input_invoice" type="text"></div>
        <div class="col-5"><label class="label">Transport Name :&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="input_invoice" type="text"></div>
    </div>
    <p><br /></p>
    <div class="set-right">
        <button class="btn btn-lg btn-submit ">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-lg btn-submit ">Print</button>
    </div>
    </div>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
</div>
</body>
</html>