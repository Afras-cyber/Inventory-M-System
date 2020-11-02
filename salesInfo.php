<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Information</title>
    <!--JavaScript Links-->    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    
    
    <!--CSS Links-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/sale.css"> 
    <script>
  $( function() {
    $( "#datePicker" ).datepicker({
        dateFormat:'yy-mm-dd'
    });
  } );
  </script>
    
</head>
<body>
<div class="container-fluid" style="padding:0;">
    <div class="row bannger-head">
        <div class="col-12 banner-tag">
            <div class="top-banner">
            <a href="home.php">
                    <img src="res/img/logo.png" alt="LOGO" class="logo" />
                </a>
                <h1 id="head-title">Sales Information</h1>
            </div>
            </div> 
         </div>
</div><br/>    
</div><form method="post" id="selectDay">
<div class="container-fluid sale-for-sale">
            <h1 id="sale_INVOICE"> Sale Invoice Information</h2><br>                
            <input name="dateValue" type="submit" id="datePicker" class="btn btn-lg btn-submit" value="YY-MM-DD">
</div>
</form>
<p><br/></p>
<p><br/></p>
<center>
<div id="msg1"></div>
<div class="table1">
    <div id="salesTable"></div>
 <!-- <table> 
     <tbody id='tableBOdy'>

         <tr>
            <th class='left-side'></th>
            <th>Date     </th>
            <th>File</th>
            <th class='middle_field'>Customer ID  </th>
            <th class='right-side'>Total Qty</th>
            <td  class='right-side-btn rm-top'></td>
        </tr>
        <tr>
            <td class='left-side'>1</td>
            <td>He34r   </td>
            <td>Janthi  </td>
            <td>5       </td>
            <td  class='right-side'> </td>
            <td  class='right-side-btn'><button class='rm-item'><i class='fas fa-minus-circle'></i></button></td>         
                
        </tr>
    
     </tbody>
    </table> -->

</div>
 <p><br /></p>
     
</center>
<p><br /></p>
<div>
   
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script src="js/sales.js"></script>      
</div>
</body>
</html>