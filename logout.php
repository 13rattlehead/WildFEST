<?php 
    session_start();
    $_SESSION["username"] = null;
    $_SESSION["password"] = null;
    session_destroy();
    header("location:../");
?>