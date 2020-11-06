<?php
    include("editbook.php");
    include('../database/database.php');
    $idStudent = $_POST['id'];
    $name = $_POST['student_name'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    $query = "UPDATE `library`.`student` SET `student_name` = '$name', `adress` = '$adress', `email` = '$email', `image` = '$image' WHERE (`student_number` = '$idStudent');";
    $pdo->query($query);
    if($query){
        header("location:./indexstudent.php");
    }
?>