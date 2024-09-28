<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>

    <form action="handleForm.php" method="POST">
        <p>Username <input type="text" name="username"></p>
        <p>Password <input type="password" name="password"></p>
        <input type="submit" value="Submit" name="submitBtn">
        <input type="submit" value="Logout" name="logoutBtn">
    </form>

    <?php

    if (isset($_SESSION['loggedIn'])) {
        echo "User Logged In: " . $_SESSION['username'] . "<br>";
        echo "Password: " . $_SESSION['password'];

    }
    ?>

</body>
</html>