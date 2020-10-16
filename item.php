<?php
    include('inc/connection.php');
   
if (isset($_POST["submit2"])) {  

        $no         =$_POST['item_no'];
        $name       =$_POST['item_name'];
        $category   =$_POST['category'];
        $description=$_POST['description'];
        $buy        =$_POST['buy_price'];
        $sell       =$_POST['sale_price'];

        $test=strval($no);
        echo "<script>console.log('$no')</script>";
       $seach_sql="SELECT * FROM `item` WHERE item_id ='$test'";
       $check_query2=mysqli_query($connection,$seach_sql);
       if($check_query2){  
          if(mysqli_num_rows($check_query2)>0){
            echo "<script>
            $(document).ready(function(){
              function myrequest() {
                  var id = $('#item_id').val();
                  $.ajax({
                      method: 'POST',
                      url: 'action.php',
                      data: {
                         item: id
                      },
                      success: function( responseObject ) {
                          alert('success');
                          console.log(responseObject);
                        //  $('#item_name').val( 'posts' );
                        //  $('#joindate').val('testing join date');
                         
                      },
                      failure: function() {
                          alert('fail');
                      }
                  });
              }
              myrequest();
            })
            </script>";
           }
          else{
             $sql="INSERT INTO `item` (`item_qid`, `item_id`, `item_name`, `category`,  `description`, `buy`, `sell`) 
             VALUES (NULL, '$no', '$name', '$category', '$description', '$buy', '$sell');";
             $check_query=mysqli_query($connection, $sql);
                 if ($check_query) {
                     echo "<script>console.log('query succesfully inserted')</script>";
                 } else {
                     echo "<script>console.log('query insert failed')</script>";
                 }
           }
       }else{
        echo "<script>console.log('find search query insert failed')</script>";
       }  
    
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
    <div class="container-fluid">
      <div class="row bannger-head">
        <div class="col-12 banner-tag">
          <div class="top-banner">
            <img src="res/img/logo.png" alt="LOGO" class="logo" />
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
            <form action="item.php" method="POST">
              <div>
                <div class="row">
                  <div class="col-3"><label class="label">Item No</label></div>
                  <div class="col-3">
                    <input type="text" name="item_no" class="input_invoice" id="item_id"/>
                    <!-- <div id ='list_item'></div> -->
                  </div>
                </div>
                <div class=row>
                <div class="col-3">
                   
                  </div>
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
                    <input type="text" name="item_name" id="item_name" class="input_invoice" />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3"><label class="label">Category</label></div>
                  <div class="col-3">
                    <select id="cateory" name="category" class="input_invoice">
                      <option value="">--Select--</option>
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Description</label>
                  </div>
                  <div class="col-6">
                    <textarea
                      name="description"
                      id=""
                      cols="70"
                      rows="15"
                      class="textarea_invoice"
                    ></textarea>
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Buy Price</label>
                  </div>
                  <div class="col-3">
                    <input type="text" name="buy_price" class="input_invoice" />
                  </div>
                </div>
                <p><br /></p>
                <div class="row">
                  <div class="col-3">
                    <label class="label">Sale Price</label>
                  </div>
                  <div class="col-3">
                    <input
                      type="text"
                      name="sale_price"
                      class="input_invoice"
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
                    id="add"
                  >
                    Add</button
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-lg btn-submit">Edit</button
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-lg btn-submit">Delete</button>
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
                <th>Sale Price(LKR)</th>
                <th>Buy Price(LKR)</th>
                <th class="righty">Description</th>
              </tr>
              <br />
              <!-- <tr>
                        <td class="lefty" >1              </td>
                        <td>HGF0012        </td>
                        <td>Art Basin      </td>
                        <td>Basin Mixer       </td>
                        <td>20000 </td>
                        <td>10000  </td>
                        <td class="righty">-    </td> 
                    </tr>              -->
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
                            $sh_description =$row['description'];
                            $sh_buy         =$row['buy'];
                            $sh_sell        =$row['sell'];
                        
                            echo "<tr>
                            <td class='lefty'>{$i}</td>
                            <td>{$sh_itemNo}</td>
                            <td>{$sh_itemName}</td>
                            <td>{$sh_category}</td>
                            <td>{$sh_sell}</td>
                            <td>{$sh_buy}</td>
                            <td class='righty'>$sh_description</td>
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
    <script src="js/search.js"></script>
    <p><br /></p>
  </body>
</html>
