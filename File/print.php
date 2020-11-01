<?php
 include('../inc/connection.php');
 if(isset($_POST['printDoc'])){
    require_once 'C:\xampp\htdocs\Inventory-M-System'. '/vendor/autoload.php';
  
  $email= $_POST['email'];
  $pwd= $_POST['pwd'];
  
  $site="HELLO";
  
  $mpdf = new \Mpdf\Mpdf();
  $mpdf->WriteHTML("HELLO WORLD");
  $pdfFilePath = "\download.pdf";
  $getPath=getcwd()."\hello";
  $mpdf->Output('mow.pdf', \Mpdf\Output\Destination::FILE);
  
  }
  ?>