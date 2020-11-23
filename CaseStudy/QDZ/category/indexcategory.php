<?php
include("C:\Users\ADMIN\Desktop\Kho-2\CaseStudy\QDZ\layout\header.php");
include('../database/database.php');
$query = 'SELECT * FROM library.category;';
$conn = $pdo->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
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
            <td><a href='editcategory.php?id=<?=$row['Category_id']?>'>Edit</a> | <a href='deletecategory.php?id=<?=$row['Category_id']?>'>Delete</a></td>
            </tr>
        
    <?php } ?>
    
</table>
<a href='addcategory.php'>Add</a>
    




<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html> 
<?php
include("C:\Users\ADMIN\Desktop\Kho-2\CaseStudy\QDZ\layout\ooter.php");
?>