<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
<h1>Add new category</h1>
<form action="frmaddcategory.php" method="post">
<table>
    <tr>
        <td>Code:</td>
        <td><input type="text" name="category_id" id=""></td>
    </tr>
    <tr>
        <td>Category name:</td>
        <td><input type="text" name="category_name" id=""></td>
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