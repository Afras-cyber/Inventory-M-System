<?php
$value=$_POST['dateValue'];
$v = explode(" ",$value);
$show= $v[0];
include('../inc/connection.php');
 $show ="<table> 
 <tbody id='tableBOdy'>
     <tr>
        <th class='left-side'></th>
        <th>Date     </th>
        <th>File</th>
        <th class='middle_field'>Customer ID  </th>
        <th class='right-side'>Total Qty</th>
        <td  class='right-side-btn rm-top'></td>
    </tr>";
//  $sales_sql="SELECT * FROM `sales_info` WHERE `date` LIKE '%".$show."%'";   
$sales_sql="SELECT * FROM `sales_info` WHERE `date`='$show'";                      
 $sales_query=mysqli_query($connection,$sales_sql);
 if($sales_query){
     $sales_count=mysqli_num_rows($sales_query);
     if($sales_count>0){
         $s=0;
         while($s_row=mysqli_fetch_assoc($sales_query)){
             $s++;
             $sales_id=$s_row['sales_id'];
             $cust_id=$s_row['cust_id'];
             $file=$s_row['file'];
             $qty=$s_row['qty'];
             $date=$s_row['date'];            
             
             $show .="<tr>
             <td class='left-side'>{$s}</td>
             <td>{$date}</td>
             <td><a href='File/$file'>$file</a></td>
             <td>{$cust_id}</td>
             <td class='right-side'>{$qty}</td>
             <td class='right-side-btn'><button id='rmFromSales' sid='$sales_id' class='rm-item'><i class='fas fa-minus-circle'></i></button></td>         
                 
         </tr>  
         ";
         }
     }else{
     echo"<script>console.log('Table is empty')</script>";
 }
 }else{
     echo"<script>console.log('fail to connect')</script>";
 }   

$show.="</tbody>
</table>";
echo $show;

?>