<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
include('../database/database.php');
?>
<?php
$query = 'SELECT book_id,book_name,athor,book.category_id,Category_name 
FROM book inner join category on book.category_id = category.category_id;';
$conn = $pdo->query($query);
?>
<h1>Book List</h1>
<table border="1">
    <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Book Athor</th>
        <th>Book Category</th>
        <th></th>
    </tr>
    <?php while ($row = $conn->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['book_id'] ?></td>
            <td><?= $row['book_name'] ?></td>
            <td><?= $row['athor'] ?></td>
            <td><?= $row['Category_name'] ?></td>
            <td><a href='editbook.php?id=<?= $row['book_id'] ?>'>Edit</a> | <a href='deletebook.php?id=<?= $row['book_id'] ?>'>Delete</a></td>
        </tr>

    <?php } ?>

</table>
<a href='addbook.php'>Add New Book</a>

<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>