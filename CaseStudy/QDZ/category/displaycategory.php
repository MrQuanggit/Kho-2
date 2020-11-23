<?php
    include("editcategory.php");
    include('../database/database.php');
    $name = $_POST['category_name'];
    $idCategory = $_POST['id'];
    $query = "UPDATE library.category SET Category_name = '$name' WHERE category_id = '$idCategory'";
    $pdo->query($query);
    if($query){
        header("location:../index.php");
    }
?>