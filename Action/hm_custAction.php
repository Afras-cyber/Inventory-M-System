<?
 include('../inc/connection.php');
if(isset($_POST['home_nameSelector'])){
    $output1='';
    $query1="SELECT * FROM `customer` WHERE customer_uid LIKE '%".$_POST["home_nameSelector"]."%'";
    $result1 =mysqli_query($connection,$query1);
    $output1='<ul id="sug"class="list-unstayled">';
    if(mysqli_num_rows($result1)>0){
        while($row1=mysqli_fetch_assoc($result1)){
            $output1 .='<li class="sugList">'.$row1['customer_uid'].'</li>';                
        }
    }else{
        $output1 .='<li class="sugList">No such customer</li>';  
    }
    $output1 .='</ul>';
    echo $output1;  
  }
  if(isset($_POST['hm_nameID'])){   
    $_id1=$_POST['hm_nameID'];   
    $sql_check1="SELECT * FROM `customer` WHERE customer_uid = '$_id1' LIMIT 1";
    $return1 = mysqli_query($connection,$sql_check1);
    if($rows1 = mysqli_fetch_assoc($return1)){
        $formattedData1 = json_encode($rows1);
        print $formattedData1;
    }
  }
?>