<?php

require 'connect.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password';";

    $result = mysqli_query($conn, $sql);

    $loggedInUser = mysqli_fetch_assoc($result);

    print_r($loggedInUser);

    if ($loggedInUser) {
        $_SESSION['user'] = $loggedInUser['username']; 
        $_SESSION['user_id'] = $loggedInUser['user_id'];
        header("Location: ../index.php");

    } else {
        echo "invalid username or password";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amarante&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Log In</title>
</head>

<body>

    <div id="login">
        <h2>Welcome!</h2>
        <div class="forms">
            <form action="" method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <p class="text"> <a href="signup.php">Don't have an account? Sign up.</a> </p>
                </div>
                <div class="button">
                    <button type="submit" class="login-btn" name="login">log in</button>
                </div>
        </div>
        </form>
    </div>


</body>


</html>