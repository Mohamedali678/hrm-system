<?php

    include "connection.php";

    if(isset($_POST["loginBtn"])){
        

        $username = $_POST["username"];
        $password = $_POST["password"];

        $checkQuery = "select * from admins where username = '$username' and password = '$password' ";
        
        $result = $dbConnection->query($checkQuery);

        $row = mysqli_num_rows($result);

        if($row < 1){
            echo "Username or Password incorrect";
        }

        else {

            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
        }

   
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
        <div class="loginForm">
            <h1>Login Here</h1>

        <form method="post">

            <input type="text" placeholder="Enter Username" name="username" autocomplete="off" autofocus><br><br>
            <input type="password" placeholder="Enter Password" name="password"><br><br>
            
            <input type="submit" value="Login" name="loginBtn" class="loginBtn">
            
        </form>
        </div>
    
</body>
</html>