<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
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
<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>