<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

 include('../inc/connection.php');

    require_once 'C:\xampp\htdocs\Inventory-M-System'. '/vendor/autoload.php';
  
    $file_ex  = 'ORD.pdf';
    $ch = strtolower($file_ex);
    $newfile = time().'.'.$ch;   
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
        <th>Item No</th>
        <th>Item Name</th>
        <th>Qty </th>             
        </tr>
      ";

    $sql="SELECT * FROM `ordertb` ";
    $sqlQuery=mysqli_query($connection,$sql);
    if($sqlQuery){
      $qry_count=mysqli_num_rows($sqlQuery);
      if($qry_count>0){          
          while($row=mysqli_fetch_assoc($sqlQuery)){ 

            $item_no=$row['itm_no'];
            $item_name=$row['itm_name'];            
            $qty=$row['qty'];
            $sup_name=$row['sup_name'];
            $sup_Id=$row['sup_id'];
            $sup_email=$row['sup_email'];
            (int)$tolQty+=(int)$qty;
           
              $file .= "                 
              <tr>
              <td>{$item_no}</td>
              <td>{$item_name}</td>
              <td>{$qty}</td>                         
              </tr>
                ";
              }
            }
          }              
          $file .="
                  <tr class='boderless'>
                  <td class='boderless'></td>
                  <td class='boderless'></td>
                  <td class='boderless'>Total Quantity</td>
                  <td class='boderless'></td>
              <td class='boderless'>{$tolQty}</td>             
              </tr>
          
          </tbody>
          </table>
          </center>
              <p>Supplier ID\t:\t$sup_Id</p>
              <p>Supplier Name\t:\t$sup_name</p>
              <p>Supplier Email\t:\t$sup_email</p>
            </body>
            </html>
            ";
              
  //insert value to Sales information
  $mpdf = new \Mpdf\Mpdf();
  $insertSQL="INSERT INTO `purchase` (`p_id`, `file`, `sup_id`, `qty`) 
  VALUES (NULL, '$newfile', '$sup_Id', '$qty');";
  $insertQuery=mysqli_query($connection,$insertSQL); 
  $mpdf->WriteHTML($file);     
  $mpdf->Output("$newfile", \Mpdf\Output\Destination::FILE);
  
  // $pdf= $mpdf->Output("",'S');

  // $enquerydata=[
  //   "Shop"=>"THE SENSITVE QUALITY IN THE BATHROOM"
  // ];
  // sendEmail($pdf,$enquerydata);
  // function sendEmail($pdf,$enquerydata){
  //   try {
  //     //Server settings
  //    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  //     // $mail->SMTPDebug = ;                    // Enable verbose debug output
  //     $mail->isSMTP();                                            // Send using SMTP
  //     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  //     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  //     $mail->Username   = '#';                     // SMTP username
  //     $mail->Password   = '#';                               // SMTP password
  //     $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  //     $mail->Port       = 587  ;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
  //     //Recipients
  //     $mail->setFrom('test@gmail.com', 'testForm');
  //     $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient      
     
  
  
  //     // Content
  //     $mail->isHTML(true);                                  // Set email format to HTML
  //     $mail->Subject = 'Here is the subject';
  //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
  //     $mail->send();
  //     echo 'Message has been sent';
  // } catch (Exception $e) {
  //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  // }
  // }

  

 
  if($insertQuery){
    //Drop table
    $delTable="DELETE FROM `ordertb`";
    $deleteQuery=mysqli_query($connection,$delTable);
  
  }else{
    echo"<script>console.log('query failed + $tolQty')</script>";
  }

 
  ?>