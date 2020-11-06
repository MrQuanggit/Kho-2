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


// while ($row = $conn->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['book_name'] . '<br>';
// }
// $con = mysqli_connect($host, $user, $password, $dbname);
// $result = mysqli_query($con, "select * from library.category");
// while($row = mysqli_fetch_array($result)){
//     echo $row['book_name'].'<br>';
// }
?>