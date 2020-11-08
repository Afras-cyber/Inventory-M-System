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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Item Add /Edit / Delete</title>
    <!--implemetn external Links-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='js/find.js'></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="stylesheet" href="css/item.css" />
    <link rel="stylesheet" href="css/update.css" />
  </head>
  <body>
  <div class="container-fluid" style="padding:0;">
      <div class="row bannger-head">
        <div class="col-12 banner-tag">
          <div class="top-banner">
          <a href="home.php">
                    <img src="res/img/logo.png" alt="LOGO" class="logo" />
                </a>
            <h1 id="head-title">Add / Edit / Delete Item</h1>
          </div>
        </div>
      </div>
      <br />
    </div>
    <div class="add-item-form box2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-5 table2">
            <form id="itm_frm" method="POST">
            <div id="message1"></div>
              <div>
                <div class="row">
                  <div class="col-3"><label class="label">Item No</label></div>
                  <div class="col-3">
                    <input type="text" autocomplete="off" name="item_id" class="input_invoice" id="item_id"/>
                  </div>
                </div>
                <div class=row>
                <div class="col-3"></div>
                  <div class="col-3">
                  <div id ='list_item'></div>
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Item Name</label>
                  </div>
                  <div class="col-3">
                    <input type="text" name="item_name" id="item_name" class="input_invoice itm_input" />
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
                    <input type="number" id="quty" name="qty" class="input_invoice itm_input" />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Description</label>
                  </div>
                  <div class="col-6">
                    <textarea
                    style="color:black"
                      name="description"
                      id="desc"
                      cols="70"
                      rows="15"
                      class="textarea_invoice itm_input"
                    ></textarea>
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Buy Price</label>
                  </div>
                  <div class="col-3">
                    <input type="text" name="buy_price" id="buy_me" class="input_invoice itm_input" />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Sale Price</label>
                  </div>
                  <div class="col-3">
                    <input
                      id="sell_me"
                      type="text"
                      name="sale_price"
                      class="input_invoice itm_input"
                    />
                  </div>
                </div>
                <p><br /></p>
                <div class="set-right">
                  <button class="btn btn-lg btn-submit" type="rest">
                    Clear</button
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                          
                  <button
                    class="btn btn-lg btn-submit"
                    type="submit"
                    name="submit2"
                    id="item_add"
                   
                  >
                    Add</button
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-lg btn-submit" id="edit_itm"name="edit">Edit</button
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-lg btn-submit" id="delete9"name="delete">Delete</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-7 table1">
            <table>
              <tr>
                <th class="lefty"></th>
                <th>Item No</th>
                <th>Item Name</th>
                <th>Category</th>
                <th class="qCOL">Qty</th>
                <th>Sale Price(LKR)</th>
                <th>Buy Price(LKR)</th>
                <th class="rightx">Description</th>
              </tr>
              <br />
                <?php
                        $sql2="SELECT * FROM `item`";
                    $fetch_query=mysqli_query($connection, $sql2);
                    $count_rows=mysqli_num_rows($fetch_query);
                    if ($count_rows>0) {
                        $i=0;
                        while ($row=mysqli_fetch_assoc($fetch_query)) {
                            $i++;
                            $sh_itemNo      =$row['item_id'];
                            $sh_itemName    =$row['item_name'];
                            $sh_category    =$row['category'];
                            $sh_qty         =$row['qty'];
                            $sh_description =$row['description'];
                            $sh_buy         =$row['buy'];
                            $sh_sell        =$row['sell'];
                        
                            echo "<tr>
                            <td class='lefty'>{$i}</td>
                            <td>{$sh_itemNo}</td>
                            <td>{$sh_itemName}</td>
                            <td>{$sh_category}</td>
                            <td class='qCOL'>{$sh_qty}</td>
                            <td>{$sh_sell}</td>
                            <td>{$sh_buy}</td>
                            <td class='rightx'>$sh_description</td>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/find.js"></script>
    <p><br /></p>
  </body>
</html>
