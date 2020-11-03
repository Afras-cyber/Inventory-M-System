<?php
 include('../inc/connection.php');
 
 if(isset($_POST['order_itemSelector'])){
    $output='';
    $query="SELECT * FROM `item` WHERE item_id LIKE '%".$_POST["order_itemSelector"]."%'";
    $result =mysqli_query($connection,$query);
    $output='<ul id="sug"class="list-unstayled">';
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $output .='<li class="sugList">'.$row['item_id'].'</li>';                
        }
    }else{
        $output .='<li class="sugList">No such Item</li>';  
    }
    $output .='</ul>';
    echo $output;  
  }
  if(isset($_POST['order_ItemID'])){   
    $_id=$_POST['order_ItemID'];
    
    $sql_check="SELECT * FROM item WHERE item_id = '$_id' LIMIT 1";
    $return = mysqli_query($connection,$sql_check);
    if($rows = mysqli_fetch_assoc($return)){
        $formattedData = json_encode($rows);
        print $formattedData;
    }
  }
  //-------------------------------------------------------------------------------------------
  if(isset($_POST['showRows'])){ 
    $show ="<table>
    <tr>
      <th class='left-side '></th>
      <th class='item_no'>Item No </th>
      <th class='nameValue'>Item Names </th>
      <th class='right-side'>Qty</th>
      <td class='right-side-btn rm-top'></td>
    </tr>
   
";
    $int_sql="SELECT * FROM `ordertb`";                       
    $int_query=mysqli_query($connection,$int_sql);
    if($int_query){
        $int_count=mysqli_num_rows($int_query);
        if($int_count>0){
            $i=0;
            while($i_row=mysqli_fetch_assoc($int_query)){
                $i++;
                $o_id       =$i_row['o_id'];
                $itm_no     =$i_row['itm_no'];
                $itm_name   =$i_row['itm_name'];
                $qty        =$i_row['qty'];              
                $sup_name   =$i_row['sup_name'] ;
                $sup_email  =$i_row['sup_email']   ;   
               
                
                $show .=" <tr>
                <td class='left-side'>$i</td>
                <td class='item_no'>$itm_no </td>
                <td class='nameValue'>$itm_name</td>
                <td class='right-side'>$qty</td>
                <td class='right-side-btn '><button id='delrow' oid='$o_id' class='rm-item'><i class='fas fa-minus-circle'></i></button>
                </td>
          
              </tr>  
            ";
            }
        }else{
        echo"<script>console.log('Table is empty')</script>";
    }
    }else{
        echo"<script>console.log('fail to connect')</script>";
    }   
  
  $show.=" </table >";
  echo $show;
  }
  //-------------------------------------------------------------------------------------------------
  if(isset($_POST['delrow'])){
    $oid = $_POST['oid'];   

    $rmSql="DELETE FROM `ordertb` WHERE o_id  ='$oid'";
    $rmQuery=mysqli_query($connection,$rmSql);
    if($rmQuery){
        echo"<script>console.log('item removed')</script>";     
     }else{
    echo"<script>console.log('item removed failed')</script>";     
     }
   }
   //----------------------------------------------------------------------
   if(isset($_POST['emptyTable'])){   
   
    $rmSq2="DELETE FROM `ordertb`";
    $rmQuery2=mysqli_query($connection,$rmSq2);
    if($rmQuery2){
        echo"<script>console.log('table clear')</script>";     
     }else{
    echo"<script>console.log('table couldn't be clear')</script>";     
     }
   }
   //-------------------------------------------------------------------------
   if(isset($_POST['rmFromOrder'])){
    $pid=$_POST['pid'];
    $salSql="DELETE FROM `purchase` WHERE `p_id`='$pid'";
    $salQuery=mysqli_query($connection,$salSql);
    if($salQuery){
        echo"<script>console.log('item removed')</script>";     
     }else{
    echo"<script>console.log('item removed failed')</script>";     
     }
  }
  //---------------------------------------------------------------------------

  if(isset($_POST['showAll'])){
    
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
       $pur_sql="SELECT * FROM `purchase` ";  
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