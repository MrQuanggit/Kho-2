<?php
    $id = $_GET['id'];
    include('../database/database.php');
    // $conn = mysqli_connect("localhost:3307","root","Quang00210496");
    // $result = mysqli_query($conn, "DELETE FROM `library`.`category` WHERE (`Category_id` = '$id');");
    $query = "DELETE FROM `library`.`category` WHERE (`Category_id` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:../index.php");
    }
?>