<?php
    include('inc/connection.php');

if(isset($_POST["submit"])){
        $no         =$_POST['item_no'];
        $name       =$_POST['item_name'];
        $category   =$_POST['category'];
        $description=$_POST['description'];
        $buy        =$_POST['buy_price'];
        $sell       =$_POST['sale_price']; 

    $sql="INSERT INTO `item` (`item_qid`, `item_id`, `item_name`, `category`, `description`, `buy`, `sell`) VALUES (NULL, '$no', '$name', '$category', '$description', '$buy', '$sell')";
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
    <title>Item</title>  <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="css/item.css"> 

</head>
<body>
<div class="container-fluid" >
    <div class="row bannger-head">
        <div class="col-12 banner-tag">
            <div class="top-banner">
                <img src="res/img/logo.png" alt="LOGO"  class="logo">
                <h1 id="head-title">Add Item</h1>                
            </div>            
         </div>    
    </div><br/>    
</div>
<div class="add-item-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="item.php" method="post">
                    <div>
                        <div class="row">
                            <div class="col-3"><label class="label">Item No</label></div>
                            <div class="col-3"><input type="text" class="input_invoice" name="item_no"></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Item Name</label></div>
                            <div class="col-3"><input type="text" class="input_invoice" name="item_name"></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Category</label></div>
                            <div class="col-3"> 
                                        <select id="cateory" name="category" class="input_invoice">
                                           <option value="volvo">Volvo</option>
                                           <option value="saab">Saab</option>
                                           <option value="fiat">Fiat</option>
                                           <option value="audi">Audi</option>
                                         </select>
                            </div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Description</label></div>
                            <div class="col-6"> 
                                       <textarea name="description" id="" cols="70" rows="15" class="textarea_invoice"></textarea> 
                            </div>
</div><p><br/></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Buy Price</label></div>
                            <div class="col-3"><input type="text" class="input_invoice" name="buy_price"></div>
                        </div><p><br></p><div class="row">
                            <div class="col-3"><label class="label">Sale Price</label></div>
                            <div class="col-3"><input type="text" class="input_invoice" name="sale_price"></div>
                        </div><p><br></p>
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit"type="clear" name='clear'>Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit"type="submit" name="submit">Enter</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6"><!--Not for avilable--></div>
        </div>
    </div>
</div>
</body>
</html>