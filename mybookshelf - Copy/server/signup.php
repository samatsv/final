<?php
require('connect.php');


if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validate passwords
    if ($password === $confirmPassword) {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    

    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location: login.php");
    } else {
        mysqli_error($conn);
    }
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
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign Up</title>
</head>

<body>

    <div id="signup">
        <h2>Create an account!</h2>
        <form action="" method="POST">
            <div class="forms">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>

                <div>
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm-password" required>
                </div>
                <div>
                    <p class="text"> <a href="login.php">Already have an account? log in.</a> </p>
                </div>
                <div class="button">
                    <button type="submit" class="signup-btn" name="signup"> sign up</button>
                </div>
            </div>
        </form>
    </div>
</body>


</html>