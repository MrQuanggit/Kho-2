<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\CaseStudy\QDZ\layout\header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h1>Add new Student</h1>
<form action="frmaddstudent.php" method="post">
<table>
    <tr>
        <td>Student Number:</td>
        <td><input type="text" name="student_number" id=""></td>
    </tr>
    <tr>
        <td>Student Name:</td>
        <td><input type="text" name="student_name" id=""></td>
    </tr>
    <tr>
        <td>Adress:</td>
        <td><input type="text" name="adress" id=""></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" id=""></td>
    </tr>
    <tr>
        <td>Image:</td>
        <td><input type="text" name="image" id=""></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Add"></td>
    </tr>
</table>
</form>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\CaseStudy\QDZ\layout\ooter.php");
?>