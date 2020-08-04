<?php 
    $dbServer = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "123456";
    $dbScheme = "tickets";

    $link = new mysqli($dbServer, $dbUsername, $dbPassword, $dbScheme);

    $username =  $_POST["username"];
    $password = md5($_POST["password"]);


    $query = $link->query("INSERT INTO accounts (username, password) VALUES ('" . $username . "', '" . $password . "')");
    mysqli_close($link);

    header('location:../')
?>
