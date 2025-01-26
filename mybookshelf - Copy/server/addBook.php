<?php




require 'connect.php';
session_start(); 





if (isset($_GET['book_id'])) {
    if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $book_id = $_GET['book_id'];

        $sql = "INSERT INTO `user_books`(`user_id`,`book_id`) 
                  VALUES ('$user_id', '$book_id');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: library.php");
        }
    }

}




