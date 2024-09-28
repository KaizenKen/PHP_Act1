<?php session_start();

    if(isset($_POST['submitBtn'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        $_SESSION['loggedIn'] = 1;
    }
    if(isset($_POST['logoutBtn'])){
        session_unset();
    }
    header('location: index.php');
?>