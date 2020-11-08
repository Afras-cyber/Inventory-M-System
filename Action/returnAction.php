<?php
 include('../inc/connection.php');
 if(isset($_POST['item_select'])){
    $output='';
    $query="SELECT * FROM `item` WHERE item_id LIKE '%".$_POST["item_select"]."%'";
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
if(isset($_POST['returnItem_id'])){   
    $_id=$_POST['returnItem_id'];
    $sql_check="SELECT * FROM item WHERE item_id = '$_id' LIMIT 1";
    $return = mysqli_query($connection,$sql_check);
    if($rows = mysqli_fetch_assoc($return)){
        $formattedData = json_encode($rows);
        print $formattedData;
    }
}
if(isset($_POST['undo_recover'])){   
    $_id1=$_POST['undo'];
    $sql_check1="SELECT * FROM `return_item` WHERE return_id = '$_id1' LIMIT 1";
    $return1 = mysqli_query($connection,$sql_check1);
    if($rows1 = mysqli_fetch_assoc($return1)){
        $formattedData1 = json_encode($rows1);
        $delUnto="DELETE FROM `return_item` WHERE `return_id`='$_id1'";
        $delQuery=mysqli_query($connection,$delUnto);
        if($delQuery){
            print $formattedData1;
        }

    }
}
?>