<?php
    $id = $_POST['category_id'];
    $name = $_POST['category_name'];
    include('../database/database.php');
    $query = "insert into library.category(Category_id, Category_name) values ('$id', '$name');";
    $pdo->query($query);
    if($query){
        header("location:../index.php");
    }
?>