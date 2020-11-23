<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `library`.`student` WHERE (`student_number` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./indexstudent.php");
    }
?>