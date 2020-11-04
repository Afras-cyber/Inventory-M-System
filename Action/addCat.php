<?php
 include('../inc/connection.php');

   
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
  exit();
            }else{
                echo"<script>console.log('Categroy Insert Failed')</script>";
              
                exit();
            }
  
        }else{
          
            
            echo"<script>alert('Item already added')</script>";
            exit();
        }
    }
  
?>