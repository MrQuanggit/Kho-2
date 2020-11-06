<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
<?php 
    $id = $_GET['id'];
?>
<h1>Edit Book</h1>
<form action="displaybook.php" method="post">
    <input type="hidden" name="id" value="<?= $id?>">
    <table>
        <tr>
            <td>Book name:</td>
            <td><input type="text" name="book_name" id=""></td>
        </tr>
        <tr>
            <td>Book Athor:</td>
            <td><input type="text" name="book_athor" id=""></td>
        </tr>
        <tr>
            <td>Book Category:</td>
            <td><input type="text" name="book_category" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Upddate"></td>
        </tr>
    </table>
</form>
<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>