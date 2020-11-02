<?php
 include('../inc/connection.php');
//  if(isset($_POST['printDoc'])){
    require_once 'C:\xampp\htdocs\Inventory-M-System'. '/vendor/autoload.php';
  
    $file_ex  = 'pdf';
    $ch = strtolower($file_ex);
    $newfile = time().'.'.$ch;
    $total=0;
    $tolQty=0;
    $file =" <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Print</title>
        <style>
        .boderless{
          border: 0px solid #ddd;
        }
        table, td, th {  
          border: 1px solid #ddd;
          text-align: center;
        }
        
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          padding: 15px;
        }
        </style>
    </head>
    <body>
      <div class='container' style='margin: 20px;'>
        <h1><center>THE SENSITVE QUALITY IN THE BATHROOM</center></h1>
      </div>      
     <br><br><center>
      <table style='width:600px'>
        <tbody>
        <tr>
        <th>Item No </th>
        <th>Item Name</th>
        <th>Qty </th>
        <th>Discount</th>
        <th>Value </th>      
        </tr>
      ";

    $sql="SELECT * FROM `invoice_hmt` WHERE 1";
    $sqlQuery=mysqli_query($connection,$sql);
    if($sqlQuery){
      $qry_count=mysqli_num_rows($sqlQuery);
      if($qry_count>0){          
          while($row=mysqli_fetch_assoc($sqlQuery)){ 

            $item_no=$row['item_no'];
            $item_name=$row['item_name'];
            $qty=$row['qty'];
            $price=$row['price'];
            $customer_name=$row['customer_name'];
            $email=$row['email'];
            $customer_id=$row['customer_id'];
            $discount=$row['discount'];
            $value=$row['value'];
            (int)$total+=(int)$value;
            (int)$tolQty+=(int)$qty;
              $file .= "                 
              <tr>
              <td>{$item_no}</td>
              <td>{$item_name}</td>
              <td>{$qty}</td>
              <td>{$discount}</td>
              <td>{$value}</td>             
              </tr>
                ";
              }
            }
          }
              
          $file .="
                  <tr class='boderless'>
                  <td class='boderless'></td>
                  <td class='boderless'></td>
                  <td class='boderless'>Total</td>
                  <td class='boderless'></td>
              <td class='boderless'>LKR {$total}</td>             
              </tr>
          
          </tbody>
          </table>
          </center>
              <p>Customer Name :&nbsp;&nbsp;$customer_name</p>
              <p>Customer ID   :&nbsp;&nbsp;$customer_id</p>
              <p>Customer Email:&nbsp;&nbsp;$email</p>
            </body>
            </html>
            ";
              
  //insert value to Sales information
  $insertSQL="INSERT INTO `sales_info` (`sales_id`, `cust_id`, `file`, `qty`, `date`) 
  VALUES (NULL, '$customer_id', '$file', '$qty', 'current_timestamp()')";
  $insertQuery=mysqli_query($connection,$insertSQL);
  if($insertQuery){
    //Drop table
    $delTable="DELETE FROM `invoice_hmt`";
    $deleteQuery=mysqli_query($connection,$delTable);
    if($deleteQuery){
      $mpdf = new \Mpdf\Mpdf();
      $mpdf->WriteHTML($file);     
      $mpdf->Output("$newfile", \Mpdf\Output\Destination::FILE);
      $mpdf->Output("$newfile", \Mpdf\Output\Destination::INLINE);
    }
  }

 
  ?>