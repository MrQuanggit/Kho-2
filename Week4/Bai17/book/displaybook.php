<?php
    include("editbook.php");
    include('../database/database.php');
    $name = $_POST['book_name'];
    $athor = $_POST['book_athor'];
    $category = $_POST['book_category'];
    $idBook = $_POST['id'];
    $query = "UPDATE `library`.`book` SET `book_name` = '$name', `athor` = '$athor', `category_id` = '$category' WHERE (`book_id` = '$idBook');";
    $pdo->query($query);
    if($query){
        header("location:./indexbook.php");
    }
?>