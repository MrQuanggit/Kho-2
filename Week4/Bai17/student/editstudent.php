<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
<?php 
    $id = $_GET['id'];
?>
<h1>Edit Student</h1>
<form action="displaystudent.php" method="post">
    <input type="hidden" name="id" value="<?= $id?>">
    <table>
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
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>