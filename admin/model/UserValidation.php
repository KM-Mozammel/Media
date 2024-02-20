<?php 
    session_start();
    if($_POST['username'] != 'root' && $_POST['password'] != 'root'){
        header("location: ../index.php?section=audio");
    } else{
        $_SESSION["logedin"] = true;
        header("location: ../index.php");
    }
