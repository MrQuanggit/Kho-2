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
?>