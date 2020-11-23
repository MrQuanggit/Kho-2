<?php
    $id = $_POST['book_id'];
    $name = $_POST['book_name'];
    $athor = $_POST['book_athor'];
    $category = $_POST['book_category'];
    include('../database/database.php');
    $query = "INSERT INTO `library`.`book` (`book_id`, `book_name`, `athor`, `category_id`) VALUES ('$id', '$name', '$athor', '$category');";
    $pdo->query($query);
    if($query){
        header("location:./indexbook.php");
    }
?>