<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
<?php 
    $id = $_GET['id'];
?>
<h1>Edit category</h1>
<form action="displaycategory.php" method="post">
    <input type="hidden" name="id" value="<?= $id?>">
    <table>
        <tr>
            <td>Category name:</td>
            <td><input type="text" name="category_name" id=""></td>
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