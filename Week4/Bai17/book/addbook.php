<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
<h1>Add new category</h1>
<form action="frmaddbook.php" method="post">
<table>
    <tr>
        <td>Code:</td>
        <td><input type="text" name="book_id" id=""></td>
    </tr>
    <tr>
        <td>Book Name:</td>
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
        <td><input type="submit" value="Add"></td>
    </tr>
</table>
</form>
<?php 
    include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>