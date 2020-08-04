<?php 
    session_start();
    $dbServer = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "123456";
    $dbScheme = "tickets";

    $link = new mysqli($dbServer, $dbUsername, $dbPassword, $dbScheme);

    $username =  $_POST["username"];
    $password = md5($_POST["password"]);

    $query0 = $link->query("SELECT * FROM accounts WHERE username = '" . $username . "'");
    if (is_bool($query0)) {
        echo "SELECT * FROM accounts WHERE username = '" . $username . "'";
    }

    $query = $query0->fetch_object();
    
    if (is_null($query)) {
        $query = $link->query("INSERT INTO accounts (username, password) VALUES ('" . $username . "', '" . $password . "')");
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
    } else {
        if(strcmp($query->password, $password) == 0) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
        } else {
            echo 'Eror';
        }
    }

    mysqli_close($link);
        
    header('location:../')
?>
