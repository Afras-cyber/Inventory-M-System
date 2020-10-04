<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Edit / Delete  </title>  <!--implemetn external Links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="css/item.css"> 
    <link rel="stylesheet" href="css/update.css">

</head>
<body>
<div class="container-fluid" >
    <div class="row bannger-head">
        <div class="col-12 banner-tag">
            <div class="top-banner">
                <img src="res/img/logo.png" alt="LOGO"  class="logo">
                <h1 id="head-title">Edit / Delete Item</h1>                
            </div>            
         </div>    
    </div><br/>    
</div>
<div class="add-item-form box2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-5 table2">
                <form action="">
                    <div>
                        <div class="row">
                            <div class="col-3"><label class="label">Item No</label></div>
                            <div class="col-3"><input type="text" class="input_invoice"></div>
                        </div><p><br></p>
                        <div class="row">
                            <div class="col-3"><label class="label">Item Name</label></div>
                            <div class="col-3"><input type="text" class="input_invoice"></div>
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
                            <div class="col-3"><input type="text" class="input_invoice"></div>
                        </div><p><br></p><div class="row">
                            <div class="col-3"><label class="label">Sale Price</label></div>
                            <div class="col-3"><input type="text" class="input_invoice"></div>
                        </div><p><br></p>
                        <div class="set-right">
                            <button class="btn btn-lg btn-submit ">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit ">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-lg btn-submit ">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
           <div class="col-7 table1">
           <table>                   
                    <tr>
                        <th class="lefty" >               </th>
                        <th>Item No         </th>
                        <th>Item Name       </th>
                        <th>Category        </th>
                        <th>Sale Price(LKR) </th>
                        <th>Buy Price(LKR)  </th>
                        <th class="righty">Description    </th> 
                    </tr>
                    <br>                    
                    <tr>
                        <td class="lefty" >1              </td>
                        <td>HGF0012        </td>
                        <td>Art Basin      </td>
                        <td>Basin Mixer       </td>
                        <td>20000 </td>
                        <td>10000  </td>
                        <td class="righty">-    </td> 
                    </tr>              </table>
           <div>
              
            </div></div>
        </div>
    </div>
</div>

<p><br></p>
<p><br></p>
</body>
</html>