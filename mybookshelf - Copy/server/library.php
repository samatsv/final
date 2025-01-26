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
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css?v=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/library.css?v=1.0">
    <link rel="icon" href="../assets/icon.png" type="image/x-icon">
    <title>Library</title>
</head>

<body>


    <main>
        <div class="genre">
            <h2> Fiction </h2>
            <div class="books">
                <?php

                $sql = "SELECT * FROM books ORDER BY genre, title";
                $result = mysqli_query($conn, $sql);
                $allBooks = mysqli_fetch_all($result, MYSQLI_ASSOC);


                foreach ($allBooks as $book) {

                    if ($book['genre'] === 'Fiction') {
                        if (isset($_SESSION['user'])) {
                            echo '
                            <div>
                                <img src="' . $book['cover_img'] . '" width="200" height="300" alt="' . $book['title'] . '">
                                <a href="addBook.php?&book_id=' . $book['book_id'] . '" class="add-book">+</a>                                <p>' . $book['title'] . '</p>
                            </div>';
                        }
                        else{
                            echo '
                            <div>
                                <img src="' . $book['cover_img'] . '" width="200" height="300" alt="' . $book['title'] . '">
                                <button class="add-book">+</button>
                                <p>' . $book['title'] . '</p>
                            </div>
                        '; 
                        }
                    }
                }
                ?>
            </div>
        </div>


        <div class="genre">
            <h2> Fantasy </h2>
            <div class="books">
                <?php
                foreach ($allBooks as $book) {

                    if ($book['genre'] === 'Fantasy') {
                        if (isset($_SESSION['user'])) {
                            echo '
                            <div>
                                <img src="' . $book['cover_img'] . '" width="200" height="300" alt="' . $book['title'] . '">
                                <a href="addBook.php?&book_id=' . $book['book_id'] . '" class="add-book">+</a>                                <p>' . $book['title'] . '</p>
                            </div>';
                        }
                        else{
                            echo '
                            <div>
                                <img src="' . $book['cover_img'] . '" width="200" height="300" alt="' . $book['title'] . '">
                                <button class="add-book">+</button>
                                <p>' . $book['title'] . '</p>
                            </div>
                        '; 
                        }
                    }
                }
                ?>
            </div>
        </div>

        <div class="genre">
            <h2> Self Help </h2>
            <div class="books">
                <?php
                foreach ($allBooks as $book) {

                    if ($book['genre'] === 'Self Help') {
                        if (isset($_SESSION['user'])) {
                            echo '
                            <div>
                                <img src="' . $book['cover_img'] . '" width="200" height="300" alt="' . $book['title'] . '">
                                <a href="addBook.php?&book_id=' . $book['book_id'] . '" class="add-book">+</a>                                <p>' . $book['title'] . '</p>
                            </div>';
                        }
                        else{
                            echo '
                            <div>
                                <img src="' . $book['cover_img'] . '" width="200" height="300" alt="' . $book['title'] . '">
                                <button class="add-book">+</button>
                                <p>' . $book['title'] . '</p>
                            </div>
                        '; 
                        }
                    }
                }
                ?>
            </div>
        </div>

    </main>

    <?php
    if (!isset($_SESSION['user'])) {
        echo '
    <section id="pop-up">
        <div class="popup-content">
            <p class="p1"> Log in to continue </p>
            <p class="p2"> To access your account and enjoy personalized features, please log in. If you don\'t
                have an account, you can sign up below.</p>
            <div class="popup-buttons">
                <a href="login.php">
                    <button class="go-to-library"> Log In </button>
                </a>
                <a href="signup.php">
                    <button class="go-to-list">Sign Up </button>
                </a>
                <button class="close">&times;</button>
            </div>
        </div>
    </section>';
    }
    ?>


    <footer id="my-footer">
    <p> &copy;2024 My Bookshelf. All rights reserved</p>
    </footer>
     <script src="../javascript/library.js"></script> 
</body>