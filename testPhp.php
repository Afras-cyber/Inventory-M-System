<?php
 include('inc/connection.php');
 session_start();
 $undoSql="SELECT MAX(`return_id`) FROM `return_item`";
 $undoQuery=mysqli_query($connection,$undoSql);
 if($undoQuery){
  if($undoRow = mysqli_fetch_assoc($undoQuery)){
      $valueOF =$undoRow['MAX(`return_id`)'];
     echo $valueOF;      
  }else{
        echo "hello";
  }
}else{
    echo "final";
}
?>