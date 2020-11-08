<?php
  include('../inc/connection.php');
  session_start();
     
       $item_no     =   $_POST['item_no'];
       $item_name   =   $_POST['item_name'];
       $category    =   $_POST['category'];
       $qty         =   $_POST['qty'];
       $reason      =   $_POST['reason'];
     
       echo "<script>console.log('check point 0')</script>";
// $sqlq= "SELECT item_id  FROM item WHERE item_id='$item_no' LIMIT 1";
// $check_queryq= mysqli_query($connection,$sqlq);
// $count_uid = mysqli_num_rows($check_queryq);
//  if($check_queryq){
//    if($count_uid>0){
  echo "<script>console.log('check point 2')</script>";
  $getQtyFromTmTB="SELECT * FROM `item` WHERE item_id ='$item_no'";
  $qryForGetqty=mysqli_query($connection,$getQtyFromTmTB);
  if($qryForGetqty){    
    echo "<script>console.log('check point 3')</script>";                    
    if(mysqli_num_rows($qryForGetqty)>0){
      if($rty = mysqli_fetch_assoc($qryForGetqty)){
        $ry= $rty['qty'];
        
        echo "<script>console.log('check point 4')</script>";
        $updateQry= (int)$ry+(int)$qty;                              
        //update qty value item table
        $up_qry="UPDATE `item` SET `qty`='$updateQry' WHERE item_id ='$item_no' ";
        $res=mysqli_query($connection,$up_qry);
        if($res){         
          echo "<script>console.log('check point 5')</script>";                      
          $qtyEffect=mysqli_affected_rows($connection);//check How many Rows effected
          if ($qtyEffect==1) { 
            echo "<script>console.log('check point 1')</script>";
               $sql="INSERT INTO `return_item` (`return_id`, `item_uid`, `item_name`, `category`, `qty`, `reason`, `date_time`, `item_id`) 
               VALUES (NULL, '$item_no', '$item_name', '$category', '$qty', '$reason', current_timestamp(), NULL);";
               $check_query=mysqli_query($connection,$sql);
               if($check_query){
                 //get last update item id
                 $undoSql="SELECT MAX(`return_id`) FROM `return_item`";
                 $undoQuery=mysqli_query($connection,$undoSql);
                 if($undoQuery){
                  if($undoRow = mysqli_fetch_assoc($undoQuery)){
                      $valueOF =$undoRow['MAX(`return_id`)'];                   
                      $_SESSION['undo_id']=$valueOF;                 
                  }else{
                    echo "<script>console.log('unto fetch')</script>";
                  }
                 }else{
                 
                    echo "<script>console.log('unto query')</script>";
                 }
             echo "<script>window.location.reload()</script>";
          }
          }
                              }
                            }
                        //   }
                          
                        // }
       
      
     }else{   
        $nameErr="Item Id is wrong, Item not avilable on list";
        echo "<script>$('#message1').html(`
        <div class='alert alert-warning'>
                <a herf=# class='close' data-dismiss='alert' aria-label='close'>
                &times;</a><b>$nameErr</b>     </div>`)</script>;";
        exit();
    }
   
}else{
  echo "<script>alert('query select failed')</script>";
}
    
?>