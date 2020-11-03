<?php
    include('inc/connection.php');
    echo "<script>console.log('before submit')</script>";
if (isset($_POST["submit"])) {
    echo "<script>console.log('after submit')</script>";
        $no         =$_POST['item_no'];
        $name       =$_POST['item_name'];
        $category   =$_POST['category'];
        $qty        =$_POST['qty'];
        $reason     =$_POST['reason'];
              
    
        $sql="INSERT INTO `return_item` (`return_id`, `item_uid`, `item_name`, `category`, `qty`, `reason`, `date_time`, `item_id`) 
        VALUES (NULL, '$no', '$name', '$category', '$qty','$reason', current_timestamp(), NULL);";
        $check_query=mysqli_query($connection, $sql);
            if ($check_query) {
                echo "<script>console.log('query succesfully inserted')</script>";
            } else {
                echo "<script>console.log('query insert failed')</script>";
            }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Returned Item Update</title>
    <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="css/item.css" />
    <link rel="stylesheet" href="css/table_item.css" />
</head>

<body>
<div class="container-fluid" style="padding:0;">
        <div class="row bannger-head">
            <div class="col-12 banner-tag">
                <div class="top-banner">
                    <a href="home.php">
                        <img src="res/img/logo.png" alt="LOGO" class="logo" />
                    </a>
                    <h1 id="head-title">Returned Item Update</h1>
                </div>
            </div>
        </div>
        <br />
    </div>
    <div class="add-item-form box2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 table2">
                    <form action="update-Item.php" method="POST">
                        <div>
                            <div class="row">
                                <div class="col-3"><label class="label">Item No</label></div>
                                <div class="col-3">
                                    <input type="text" name="item_no" class="input_invoice" placeholder="HCF0013" />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">Item Name</label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="item_name" class="input_invoice"
                                        placeholder="Wall-hung Basin" />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3"><label class="label">Category</label></div>
                                <div class="col-3">
                                <select id="cateory" name="category" class="input_invoice itm_input">
                      <option value="">--Select--</option>
                      <?php
                        $catSQl="SELECT * FROM `category`";
                        $catQuery=mysqli_query($connection,$catSQl);
                        if($catQuery){                          
                          if($cat_count=mysqli_num_rows($catQuery)>0){                              
                              while($cat_row=mysqli_fetch_assoc($catQuery)){
                                  $s++;
                                  $cat_name=$cat_row['cat_name'];
                                  echo "<option value='$cat_name'>$cat_name</option>";
                        }}else{
                          echo "<option value='#'>No Category</option>";
                        }
                      }
                      ?>                      
                    </select>
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">Quantity</label>
                                </div>
                                <div class="col-3">
                                    <input type="number" name="qty" class="input_invoice" placeholder="Quantity" />
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-3">
                                    <label class="label">Reason</label>
                                </div>
                                <div class="col-6">
                                    <textarea name="reason" id="" cols="70" rows="15"
                                        class="textarea_invoice"></textarea>
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="set-right">
                                <button class="btn btn-lg btn-submit" type="rest">
                                    Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit" type="submit" name="submit">
                                    Add
                                </button>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-submit">Undo</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-5 table1">
                    <table>
                        <tr>
                            <th class="lefty"></th>
                            <th>Item No</th>
                            <th class='namey'>Item Name</th>
                            <th>Category</th>
                            <th class="righty">Quantity</th>
                        </tr>
                        <br />
                        <?php
                $sql2="SELECT * FROM `return_item`";
                $fetch_query=mysqli_query($connection, $sql2);
                $count_rows=mysqli_num_rows($fetch_query);
                if ($count_rows>0) {
                    $i=0;
                    while ($row=mysqli_fetch_assoc($fetch_query)) {
                        $i++;
                        $sh_itemUid     =$row['item_uid'];
                        $sh_itemName    =$row['item_name'];
                        $sh_category    =$row['category'];                           
                        $sh_qty         =$row['qty'];
                    
                        echo "<tr>
                        <td class='lefty'>{$i}</td>
                        <td>{$sh_itemUid}</td>
                        <td class='namey'>{$sh_itemName}</td>
                        <td>{$sh_category}</td>                           
                        <td class='righty'>$sh_qty</td>
                        </tr>    ";
                    }
                }

?>
                    </table>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <p><br /></p>
    <p><br /></p>
</body>

</html>