<?php
require 'connect.php';
include 'header.php';


if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="icon" href="../assets/icon.png" type="image/x-icon">
    <title>About Us</title>
</head>

<body>

    <body>
        <main>

            <div class="jumbotron">
                <h1 class="display-4"> About us!</h1>
                <p class="lead">At My Bookshelf, we are dedicated to helping readers organize their reading
                    journeys and discover new books with ease. Whether you're just starting your reading adventure or
                    are an avid book enthusiast, our platform provides the tools to track your reading progress, build
                    personalized reading lists, and explore an extensive library of books across a variety of genres.
                </p>
                <hr class="my-4">
                <p>Our mission is to inspire a love for reading by making it simple and enjoyable to stay organized and
                    find your next great read. <br> Start exploring today!
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="library.php" role="button">Go to library</a>
                </p>
            </div>

        </main>

        <footer id="my-footer">
            <p> &copy;2024 My Bookshelf. All rights reserved</p>
        </footer>

    </body>