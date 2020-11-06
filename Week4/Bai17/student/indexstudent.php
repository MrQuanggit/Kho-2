<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
include('../database/database.php');
?>
<?php
$query = 'SELECT * FROM library.student';
$conn = $pdo->query($query);
?>
<h1>Student List</h1>
<table border="1">
    <tr>
        <th>Student Number</th>
        <th>Student Name</th>
        <th>Adress</th>
        <th>Email</th>
        <th>Image</th>
        <th></th>
    </tr>
    <?php while ($row = $conn->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['student_number'] ?></td>
            <td><?= $row['student_name'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><img src="<?= $row['image'] ?>" alt="" style="width: 50px; height: 50px"></td>
            <td><a href='editstudent.php?id=<?= $row['student_number'] ?>'>Edit</a> | <a href='deletestudent.php?id=<?= $row['student_number'] ?>'>Delete</a></td>
        </tr>

    <?php } ?>

</table>
<a href='addstudent.php'>Add New Book</a>

<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>