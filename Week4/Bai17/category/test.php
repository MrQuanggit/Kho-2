<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\header.php");
?>
<?php
$host = 'localhost:3307';
$dbname = 'library';
$user = 'root';
$password = 'Quang00210496';

$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;
try {
    $pdo = new PDO($dns, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    echo $e->getMessage();
}
$query = 'SELECT * FROM library.category;';
$conn = $pdo->query($query);


// while ($row = $conn->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['book_name'] . '<br>';
// }
// $con = mysqli_connect($host, $user, $password, $dbname);
// $result = mysqli_query($con, "select * from library.category");
// while($row = mysqli_fetch_array($result)){
//     echo $row['book_name'].'<br>';
// }
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
            <td><a href='/editcategory.php?id=<?=$row['Category_id']?>'>Edit</a> | <a href='/deletecategory.php?id=<?=$row['Category_id']?>'>Delete</a></td>
            </tr>
        
    <?php } ?>
    
</table>
<a href='/addcategory.php'>Add</a> 
<?php
include("C:\Users\ADMIN\Desktop\Kho-2\Week4\Bai17\layout\ooter.php");
?>