<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];

    if($username === "admin" && $password === "admin") {
        echo "<h3>Welcome <span style='color:red'>".$username."</span></h3>";
    } else {
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
?>
<!DOCTYPE HTML>
<html>
    <style type="text/css">
    .login {
          height:180px; width:230px;
          margin:0;
          padding:10px;
          border:5px solid green;
    }
    .login input {
          padding:5px; margin:5px;
    }
    </style>  
    <body>
        <form action="" method="get">
          <div class="login">
             <h2>Login</h2>
             <input type="text" name="username" size="25"  placeholder="username" />
             <input type="password" name="password" size="25" placeholder="password" />
             <input type="submit" value="Sign in"/>
          </div>
       </form>
    </body>
</html>
