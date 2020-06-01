<?php
require_once("conn/config.php");
if(isset($_POST['insert'])){
    $selected_food = implode(',', $_POST['food']);
    $insert_food = "INSERT INTO `favourite_food`(`food_name`) VALUES ('".$selected_food."')";
    $res = mysqli_query($conn,$insert_food);
    if($res){
        header("location:index.php");

    }
    else{
        echo "ERROR";

    }

}


   
?>