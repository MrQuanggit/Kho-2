<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
include('./database/database.php');
$query = 'SELECT * FROM library.category;';
$conn = $pdo->query($query);
?>
<h1>Categories List</h1>
<table border="1">
    <tr>
        <th>Category ID</th>
        <th>Categoty Name</th>
        <th></th>
    </tr>
    <?php while ($row = $conn->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
            <td><?=$row['Category_id']?></td>
            <td><?=$row['Category_name']?></td>
            <td><a href='/category/editcategory.php?id=<?=$row['Category_id']?>'>Edit</a> | <a href='/category/deletecategory.php?id=<?=$row['Category_id']?>'>Delete</a></td>
            </tr>
        
    <?php } ?>
    
</table>
<a href='/category/addcategory.php'>Add</a> 
<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>