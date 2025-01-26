<?php

require 'connect.php';

if (isset($_GET['book_id'])){
$book_id = $_GET['book_id'];

$sql = "DELETE FROM user_books WHERE book_id = $book_id;";

mysqli_query($conn,$sql);

    header("Location: mylist.php");



}