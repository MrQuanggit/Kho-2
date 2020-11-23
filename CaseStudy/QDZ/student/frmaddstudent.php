<?php
    $id = $_POST['student_number'];
    $name = $_POST['student_name'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    include('../database/database.php');
    $query = "INSERT INTO `library`.`student` (`student_number`, `student_name`, `address`, `email`, `image`) VALUES ('$id', '$name', '$adress', '$email', '$image');";
    $pdo->query($query);
    if($query){
        header("location:./indexstudent.php");
    }
?>