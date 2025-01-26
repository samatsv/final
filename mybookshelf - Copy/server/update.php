<?php

require 'connect.php';

if (isset($_POST['status'])) {

    $book_id = $_POST["book_id"];
    $status= $_POST["status"];
    $sql = "UPDATE user_books SET status='$status' WHERE book_id=$book_id;";

    $result = mysqli_query($conn,$sql);
     if($result) {
        header("Location: mylist.php");
     }
}



?>