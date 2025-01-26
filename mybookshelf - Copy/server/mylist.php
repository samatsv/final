<?php
require 'connect.php';
include 'header.php';


if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/mylist.css?v=1.0">
    <link rel="icon" href="../assets/icon.png" type="image/x-icon">
    <title>My List</title>
</head>

<body>


    <main>

        <div class="status">
        <h2> Recently Added </h2>
            <section>
                <?php
                $user_id = $_SESSION['user_id'];


                $sql = "
                    SELECT 
                    books.title AS title,
                    books.author AS author,
                    books.cover_img AS cover_img,
                    user_books.status AS status,
                  books.book_id as book_id                    
                    FROM 
                    user_books
                    JOIN 
                    books ON user_books.book_id = books.book_id
                    WHERE 
                    user_books.user_id = '$user_id';";

                $result = mysqli_query($conn, $sql);
                $list_items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach ($list_items as $item) {
                    if ($item['status'] === 'recently added') {
                        echo '
                       
                        <div class="list">
                    <div class="list-item">
                        <button class="remove">&times;</button>
                        <div class="book-img">
                            <img src="' . $item['cover_img'] . '" width="200" height="300">                     
                                <p>' . $item['title'] . '</p>
                                <p>' . $item['author'] . '</p>
                        </div>
                        <div class="medal">
                            <img src="../assets/bronze.png" width="200" height="200">
                        </div>
                        <div class="options">
                            <div class="third">
                              <form method="POST" action="update.php" class="updateform">
                                <input type="hidden" name="book_id" value="' . $item['book_id'] . '">
                                    <button type="submit" name="status" value="currently reading"
                                        class="currently-reading">reading</button>
                                    <button type="submit" name="status" value="completed"
                                        class="completed">completed</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                }
                ?>

            </section>
        </div>


        <div class="status">
            <h2> Currently Reading </h2>
            <section>
                <?php
                $user_id = $_SESSION['user_id'];


                $sql = "
                    SELECT 
                    books.title AS title,
                    books.author AS author,
                    books.cover_img AS cover_img,
                    user_books.status AS status,
                  books.book_id as book_id                    
                    FROM 
                    user_books
                    JOIN 
                    books ON user_books.book_id = books.book_id
                    WHERE 
                    user_books.user_id = '$user_id';";

                $result = mysqli_query($conn, $sql);
                $list_items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach ($list_items as $item) {
                    if ($item['status'] === 'currently reading') {
                        echo '
                        <div class="list">
                    <div class="list-item">
                        <button class="remove">&times;</button>
                        <div class="book-img">
                            <img src="' . $item['cover_img'] . '" width="200" height="300">                     
                                <p>' . $item['title'] . '</p>
                                <p>' . $item['author'] . '</p>
                        </div>
                        <div class="medal">
                            <img src="../assets/Completed__3_-removebg-preview.png" width="200" height="200">
                        </div>
                        <div class="options">
                            <div class="first">
                              <form method="POST" action="update.php" class="updateform">
                                <input type="hidden" name="book_id" value="' . $item['book_id'] . '">
                                    <button type="submit" name="status" value="currently reading"
                                        class="currently-reading">reading</button>
                                    <button type="submit" name="status" value="completed"
                                        class="completed">completed</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                }
                ?>

            </section>
        </div>



        <div class="status">
            <h2> Completed </h2>
            <section>
                <?php
                $user_id = $_SESSION['user_id'];


                $sql = "
                    SELECT 
                    user_books.user_books_id AS user_books_id,
                    books.title AS title,
                    books.author AS author,
                    books.cover_img AS cover_img,
                    user_books.status AS status,
                  books.book_id as book_id                    
                    FROM 
                    user_books
                    JOIN 
                    books ON user_books.book_id = books.book_id
                    WHERE 
                    user_books.user_id = '$user_id';";

                $result = mysqli_query($conn, $sql);
                $list_items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach ($list_items as $item) {
                    if ($item['status'] === 'completed') {
                        echo '
                        <div class="list">
                    <div class="list-item">
                        <button class="remove">&times;</button>
                        <div class="book-img">
                            <img src="' . $item['cover_img'] . '" width="200" height="300">                     
                                <p>' . $item['title'] . '</p>
                                <p>' . $item['author'] . '</p>
                        </div>
                        <div class="medal">
                            <img src="../assets/Completed__5_-removebg-preview (2).png" width="200" height="200">
                        </div>
                        <div class="options">
                            <div class="second">
                              <form method="POST" action="update.php" class="updateform">
                                <input type="hidden" name="book_id" value="' . $item['book_id'] . '">
                                    <button type="submit" name="status" value="currently reading"
                                        class="currently-reading">reading</button>
                                    <button type="submit" name="status" value="completed"
                                        class="completed">completed</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                }
                ?>

            </section>
        </div>
        <button id="scroll-btn"><i class="fa-solid fa-arrows-up-down"></i></i></button>


    </main>

    <section id="pop-up">
        <div class="popup-content">
            <p class="p1"> Are You Sure You Want to Remove This Book?</p>
            <p class="p2"> This action will permanently delete the book from your list. <br> You won't be able to undo
                this
                action.</p>
            <div class="popup-buttons">
            <?php
            echo ' <a href="delete.php?book_id=' . $item['book_id'] . '" class="text-light">
            <button class="confirm">Confirm</button>
        </a>';
            ?>
                <button class="cancel"> Cancel </button>
                <button class="close">&times;</button>

            </div>
        </div>
    </section>

    <footer id="my-footer">
    <p> &copy;2024 My Bookshelf. All rights reserved</p>
    </footer>
    <script src="../javascript/mylist.js"></script>
</body>


</html>