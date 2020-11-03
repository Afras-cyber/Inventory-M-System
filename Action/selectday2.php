<?php

if(isset($_POST['selectDay'])){
    $k=$_POST['i'];

    // $value=$_POST['dateValue'];
    // $v = explode(" ",$value);
    // $show= $v[0];
    include('../inc/connection.php');
     $show ="<table> 
     <tbody id='tableBOdy'>
     <tr>
     <th class='left-side '></th>
     <th>Date     </th>
     <th>File</th>
     <th class='middle_field'>Supplier ID </th>
     <th class='right-side'>Qty</th>
     <td  class='right-side-btn rm-top'></td>
 </tr>";
     $pur_sql="SELECT * FROM `purchase` WHERE `date` LIKE '%".$k."%'";  
     $pur_query=mysqli_query($connection,$pur_sql);
     if($pur_query){
         $pur_count=mysqli_num_rows($pur_query);
         if($pur_count>0){
             $s=0;
             while($s_row=mysqli_fetch_assoc($pur_query)){
                 $s++;
                 $p_id=$s_row['p_id'];
                 $sup_id=$s_row['sup_id'];
                 $file=$s_row['file'];
                 $qty=$s_row['qty'];
                 $date=$s_row['date'];            
                 
                 $show .="<tr>
                 <td class='left-side'>$s</td>
                 <td>$date</td>
                 <td><a href='Order_Files/$file'>$file</a></td>
                 <td>$sup_id</td>
                 <td  class='right-side'>$qty</td>
                 <td class='right-side-btn'><button id='rmFromOrder' pid='$p_id' class='rm-item'><i class='fas fa-minus-circle'></i></button></td>        
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
}

?>