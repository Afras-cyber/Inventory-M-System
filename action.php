<?php
    include('inc/connection.php');
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
        $return = mysql_query("SELECT * FROM someTable WHERE idem_id = '$_id' LIMIT 1");
        $rows = mysql_fetch_array($return);
        $formattedData = json_encode($rows);
        print $formattedData;
    }
?>