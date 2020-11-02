<?php
session_start();
   //------------------------------------Item----------------------------------------//
    include('../inc/connection.php');
    if(isset($_POST['query'])){
        $output='';
        $query="SELECT * FROM `item` WHERE item_id LIKE '%".$_POST["query"]."%'";
        $result =mysqli_query($connection,$query);
        $output='<ul class="list-unstayled">';
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $output .='<li>'.$row['item_id'].'</li>';                
            }
        }else{
            $output .='<li>No such Item</li>';  
        }
        $output .='</ul>';
        echo $output;  
    }
    if(isset($_POST['item'])){   
        $_id=$_POST['item'];
        // $sql_check="SELECT * FROM someTable WHERE idem_id = '$_id' LIMIT 1";
        $sql_check="SELECT * FROM item WHERE item_id = '$_id' LIMIT 1";
        $return = mysqli_query($connection,$sql_check);
        if($rows = mysqli_fetch_assoc($return)){
            $formattedData = json_encode($rows);
            print $formattedData;
        }
    }
    if(isset($_POST['delete_item'])){
              $no2         =$_POST['delete_item'];
              echo "hello"+$no;
        $delete="DELETE FROM `item` WHERE item_id ='$no2'";
        $result2=mysqli_query($connection,$delete);
        if($result2){
          $check_effect_row=mysqli_affected_rows($connection);//check How many Rows effected
          if ($check_effect_row==1) {        
          echo "<script>console.log('delete success ful')</script>";        
        }else{
          echo "<script>console.log('Deleted affected failed')</script>";
        }
      }else{
        echo "<script>console.log('delete failed')</script>";
      }
    }
    //------------------------------------Custmer----------------------------------------//

    if(isset($_POST['cutomer_select'])){
      $output1='';
      $query1="SELECT * FROM `customer` WHERE customer_uid LIKE '%".$_POST["cutomer_select"]."%'";
      $result1 =mysqli_query($connection,$query1);
      $output1='<ul class="list-unstayled">';
      if(mysqli_num_rows($result1)>0){
          while($row1=mysqli_fetch_assoc($result1)){
              $output1 .='<li>'.$row1['customer_uid'].'</li>';                
          }
      }else{
          $output1 .='<li>No such customer</li>';  
      }
      $output1 .='</ul>';
      echo $output1;  
  }
  if(isset($_POST['custom_id'])){   
      $_id1=$_POST['custom_id'];   
      $sql_check1="SELECT * FROM `customer` WHERE customer_uid = '$_id1' LIMIT 1";
      $return1 = mysqli_query($connection,$sql_check1);
      if($rows1 = mysqli_fetch_assoc($return1)){
          $formattedData1 = json_encode($rows1);
          print $formattedData1;
      }
  }
  if(isset($_POST['customer_delete'])){
      $no21         =$_POST['customer_delete'];           
      $delete1="DELETE FROM `customer` WHERE customer_uid ='$no21'";
      $result21=mysqli_query($connection,$delete1);
      if($result21){
        $check_effect_row=mysqli_affected_rows($connection);
        if ($check_effect_row==1) {        
        echo "<script>console.log('delete success ful')</script>"; 
        echo "<script>alert('Cutomer Details Deleted.')</script>";        
      }else{
        echo "<script>console.log('Deleted affected failed')</script>";
      }
    }else{
      echo "<script>console.log('delete failed')</script>";
    }
  }
  
  //------------------------------------Supplier----------------------------------------//

  if(isset($_POST['supplier_select'])){
    $output1='';
    $query1="SELECT * FROM `supplier` WHERE sup_uid LIKE '%".$_POST["supplier_select"]."%'";
    $result1 =mysqli_query($connection,$query1);
    $output1='<ul class="list-unstayled">';
    if(mysqli_num_rows($result1)>0){
        while($row1=mysqli_fetch_assoc($result1)){
            $output1 .='<li>'.$row1['sup_uid'].'</li>';                
        }
    }else{
        $output1 .='<li>No such supplier</li>';  
    }
    $output1 .='</ul>';
    echo $output1;  
}
if(isset($_POST['supplier_id'])){   
    $_id1=$_POST['supplier_id'];   
    $sql_check1="SELECT * FROM `supplier` WHERE sup_uid = '$_id1' LIMIT 1";
    $return1 = mysqli_query($connection,$sql_check1);
    if($rows1 = mysqli_fetch_assoc($return1)){
        $formattedData1 = json_encode($rows1);
        print $formattedData1;
    }
}
if(isset($_POST['supplier_delete'])){
    $no22         =$_POST['supplier_delete'];   
        
    $delete1="DELETE FROM `supplier` WHERE sup_uid ='$no22'";
    $result21=mysqli_query($connection,$delete1);
    if($result21){
      $check_effect_row=mysqli_affected_rows($connection);
      if ($check_effect_row==1) {        
        echo "<script>alert('Supplier Details Deleted.')</script>";        
      echo "<script>console.log('Supplier details delete success ful')</script>"; 
    }else{
      echo "<script>console.log('Deleted affected failed')</script>";
    }
  }else{
    echo "<script>console.log('delete failed')</script>";
  }
} 
//-------------------------------------------------------------------------//
  
if(isset($_POST['submit_category1']))  {
  echo"<script>alert('if not working')</script>";
  $newCatgory = $_POST['newCategory'];

  $findCat="SELECT * FROM `category` WHERE `cat_name`='$newCatgory'";
  $findQuery=mysqli_query($connection,$findCat);
  if($findQuery){
      $catFound=mysqli_num_rows($findQuery);
      if($catFound===0){
          $catInsetSql="INSERT INTO `category`(`cat_name`) VALUES ('$newCatgory')";
          $insertCatQuery=mysqli_query($connection,$catInsetSql);
          if($insertCatQuery){
              echo"<script>console.log('new Category added ',$newCatgory)</script>";
              echo"<script>document.getElementById('newCategory').value = ''</script>";
              header("Location: home.php");
exit();
          }else{
              echo"<script>console.log('Categroy Insert Failed')</script>";
              header("Location: home.php");
              exit();
          }

      }else{
          echo"<script>document.getElementById('newCategory').value = ''</script>";
          header("Location: home.php");
          echo"<script>alert('Item already added')</script>";
          exit();
      }
  }
}  
if(isset($_POST['rm_list'])){
  $tid = $_POST['tid'];
  //get qty value from home page temp table
    
  $findSql="SELECT * FROM `invoice_hmT` WHERE i_id ='$tid'";  
  $check_query2=mysqli_query($connection,$findSql);
  if($check_query2){          
     if(mysqli_num_rows($check_query2)>0){
       if($rowsQty = mysqli_fetch_assoc($check_query2)){
           $rwQty= $rowsQty['qty'];
           $itmID=$rowsQty['item_no'];//add value              
                  $getQtyFromTmTB="SELECT * FROM `item` WHERE item_id ='$itmID'";
                  $qryForGetqty=mysqli_query($connection,$getQtyFromTmTB);
                  if($qryForGetqty){                        
                     if(mysqli_num_rows($qryForGetqty)>0){
                       if($rty = mysqli_fetch_assoc($qryForGetqty)){
                           $ry= $rty['qty'];
                           $updateQry= (int)$ry+(int)$rwQty;                              
                           //update qty value item table
                           $up_qry="UPDATE `item` SET `qty`='$updateQry' WHERE item_id ='$itmID' ";
                           $res=mysqli_query($connection,$up_qry);
                           if($res){                               
                               $qtyEffect=mysqli_affected_rows($connection);//check How many Rows effected
                               if ($qtyEffect==1) {  
                                 echo"<script>console.log('item removed,$tid')</script>";    
                                 $rmSql="DELETE FROM `invoice_hmT` WHERE `i_id`='$tid'";
                                 $rmQuery=mysqli_query($connection,$rmSql);
                                 if($rmQuery){
                                     echo"<script>console.log('item removed')</script>";     
                                  }else{
                                 echo"<script>console.log('item removed failed')</script>";     
                                  }

                               }else{
                                echo"<script>console.log('failed to effect')</script>";     

                               }
                           }else{
                                echo"<script>console.log('failed to update')</script>";     
                              }
                            }
                          }
                        }
          }
       }
  }
}
// -------------------------------------Home Item Sale Invoice-------------------------------------------
if(isset($_POST['home_itemSelector'])){
  $output='';
  $query="SELECT * FROM `item` WHERE item_id LIKE '%".$_POST["home_itemSelector"]."%'";
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
if(isset($_POST['hm_ItemID'])){   
  $_id=$_POST['hm_ItemID'];
  
  $sql_check="SELECT * FROM item WHERE item_id = '$_id' LIMIT 1";
  $return = mysqli_query($connection,$sql_check);
  if($rows = mysqli_fetch_assoc($return)){
      $formattedData = json_encode($rows);
      print $formattedData;
  }
}
//------------------------Home Cust Name Invoice----------------------------

if(isset($_POST['home_nameSelector'])){
  $output1='';
  $query1="SELECT * FROM `customer` WHERE customer_uid LIKE '%".$_POST["home_nameSelector"]."%'";
  $result1 =mysqli_query($connection,$query1);
  $output1='<ul id="sug"class="list-unstayled">';
  if(mysqli_num_rows($result1)>0){
      while($row1=mysqli_fetch_assoc($result1)){
          $output1 .='<li id="sugList">'.$row1['customer_uid'].'</li>';                
      }
  }else{
      $output1 .='<li id="sugList">No such customer</li>';  
  }
  $output1 .='</ul>';
  echo $output1;  
}
if(isset($_POST['hm_nameID'])){   
  $_id1=$_POST['hm_nameID'];   
  $sql_check1="SELECT * FROM `customer` WHERE customer_uid = '$_id1' LIMIT 1";
  $return1 = mysqli_query($connection,$sql_check1);
  if($rows1 = mysqli_fetch_assoc($return1)){
      $formattedData2 = json_encode($rows1);
      print $formattedData2;
  }
}
//----------------------------------get Price for qty----------------------------
if(isset($_POST['changeqty'])){
  $itNo= $_POST['changeqty'];
  $query5="SELECT * FROM `item` WHERE `item_id`='$itNo'";
  $result1 =mysqli_query($connection,$query5); 
  if(mysqli_num_rows($result1)>0){
      if($row1=mysqli_fetch_assoc($result1)){
        $selprice=$row1['sell']; 
         echo $selprice;                
      }else{
        echo"<script>console.log('sell price not there')</script>"; 
      }
  }else{
    echo"<script>console.log('getting sell price is failed')</script>"; 
  }  
}
//---------------------------------------show rows------------------------------------------------
if(isset($_POST['showRows'])){ 
  $show =" <table >";
  $show .="
  <tr>
  <th class='left-side'></th>
  <th>Item No </th>
  <th>Item Name </th>
  <th>Qty </th>
  <th>Price (LKR) </th>
  <th>Discount </th>
  <th class='right-side'>value(LKR) </th>
  <th class='right-side-btn rm-top'></th>
  </tr>";
  $int_sql="SELECT * FROM `invoice_hmT`";                       
  $int_query=mysqli_query($connection,$int_sql);
  if($int_query){
      $int_count=mysqli_num_rows($int_query);
      if($int_count>0){
          $i=0;
          while($i_row=mysqli_fetch_assoc($int_query)){
              $i++;
              $i_id=$i_row['i_id'];
              $it_no=$i_row['item_no'];
              $it_na=$i_row['item_name'];
              $i_qty=$i_row['qty'];
              $i_price=$i_row['price'];
              $i_dis=$i_row['discount'] ;
              $i_val=$i_row['value']   ;   
             
              
              $show .="<tr>
              <td class='left-side'>{$i} </td>
              <td>{$it_no}</td>
              <td>{$it_na}</td>
              <td>{$i_qty}</td>
              <td>{$i_price} </td>
              <td>{$i_dis}</td>
              <td class='right-side'>LKR {$i_val}</td>
              <td class='right-side-btn' ><button tid='{$i_id}' id='rm_list'  class='rm-item'><i class='fas fa-minus-circle'></i></button>
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
//------------------------------------------------show total-------------------------------------------------------
if(isset($_POST['showTotal'])){
  $total = 0;
  $query10="SELECT * FROM `invoice_hmT`";   
  $result10 =mysqli_query($connection,$query10); 
  if(mysqli_num_rows($result10)>0){
      while($row10=mysqli_fetch_assoc($result10)){              
         $i_val10=$row10['value']   ;   
         $change = (float)$i_val10;
         $total=$total + $change;    
      }
  }else{
    echo"<script>console.log('getting value price is failed')</script>"; 
  } 
  echo $total; 
}
//---------------------------------------------clear all table inside  invoice_hmT-----------------------------
// invoice_hmT
if(isset($_POST['clearAllTable'])){
  // 1st step get value form table
  $qry_sql="SELECT * FROM `invoice_hmT`";                       
  $qry_query=mysqli_query($connection,$qry_sql);
  if($qry_query){
      $qry_count=mysqli_num_rows($qry_query);
      if($qry_count>0){          
          while($qry_row=mysqli_fetch_assoc($qry_query)){              
              $id=$qry_row['i_id'];
              $itemNo=$qry_row['item_no'];
              $itemQty=$qry_row['qty'];
              // 2nd step get current item qty
                  $step2="SELECT * FROM `item` WHERE item_id = '$itemNo'";
                  $step2qry =mysqli_query($connection,$step2);                 
                  if(mysqli_num_rows($step2qry)>0){
                      if($step2row=mysqli_fetch_assoc($step2qry)){
                          $itemQty2= $step2row['qty'];
                          // 3rd step make new qty
                          $newQty= (int)$itemQty+(int)$itemQty2;
                          //Update value
                                $upt_qry="UPDATE `item` SET `qty`='$newQty' WHERE item_id ='$itemNo'";
                                $res1=mysqli_query($connection,$upt_qry);
                                if($res1){                               
                                    $qtyEffect1=mysqli_affected_rows($connection);//check How many Rows effected
                                    if ($qtyEffect1==1) {                                       
                                      $rmSql1="DELETE FROM `invoice_hmT` WHERE `i_id`='$id'";
                                      $rmQuery1=mysqli_query($connection,$rmSql1);
                                      if($rmQuery1){
                                          echo"<script>console.log('item removed')</script>";     
                                       }else{
                                      echo"<script>console.log('item removed failed')</script>";     
                                       }
                                     
                                    }else{
                                     echo"<script>console.log('failed to effect')</script>";     
                                    
                                    }
                                }else{
                                     echo"<script>console.log('failed to update')</script>";     
                                   }
                      }
                    }
           }
      }
   }
}
//-----------------------------------------------Sales information------------------------------------------------------------
if(isset($_POST['showSales'])){ 
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
  $sales_sql="SELECT * FROM `sales_info`";                       
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
}
//----------------------------------Delete form Sales----------------------------------------
if(isset($_POST['rmFromSales'])){
  $sid=$_POST['sid'];
  $salSql="DELETE FROM `sales_info` WHERE `sales_id`='$sid'";
  $salQuery=mysqli_query($connection,$salSql);
  if($salQuery){
      echo"<script>console.log('item removed')</script>";     
   }else{
  echo"<script>console.log('item removed failed')</script>";     
   }
}
?>