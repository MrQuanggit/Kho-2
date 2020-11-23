<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `library`.`book` WHERE (`book_id` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./indexbook.php");
    }
?>