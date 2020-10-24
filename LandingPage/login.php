<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("Ảnh/12-_mg_4885_pc-1560927962.jpg");
        }
        .box{
            background-color: #dfe6e9;
            width: 350px;
            padding: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 20px;
        }
        .box input[type = "text"],.box input[type = "password"]{
            border: 0;
            display: block;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #6c5ce7;
            padding: 13px 10px;
            width: 250px;
            outline: none;
            border-radius: 24px;
            transition: 0.5s; 
        }
        .box input[type = "text"]:focus,.box input[type = "password"]:focus{
            width: 320px;
            border-color: #fdcb6e;
        }
        .box input[type = "submit"]{
            border: 0;
            display: block;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #0984e3;
            padding: 13px 40px;
            outline: none;
            border-radius: 24px;
            cursor: pointer;
        }
        .box input[type = "submit"]:hover{
            background-color: #fdcb6e;
        }
    </style>
</head>
<body>
    <form action="http://localhost:5656/index.php" class="box" method="post">
        <h1>Siêu Thị DQ</h1>
        <input type="text" name="" placeholder="Username">
        <input type="password" name="" placeholder="Password">
        <input type="submit" value="Đăng nhập">
    </form>
</body> 
</html>