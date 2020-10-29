<?php
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
  $tid = $_POST['rm_list'];
  echo"<script>console.log('item removed,$tid')</script>";    
  $rmSql="DELETE FROM `invoice_hmT` WHERE `i_id`='$tid'";
  $rmQuery=mysqli_query($connection,$rmSql);
  if($rmQuery){
      echo"<script>console.log('item removed')</script>";     
}else{
  echo"<script>console.log('item removed failed')</script>";     
}}
?>