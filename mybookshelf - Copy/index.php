<?php
session_start();
require 'server/connect.php';



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
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css?v=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="assets/icon.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>

<header>

<?php



if (isset($_SESSION['user'])) {
    echo '
<header class="my-header">
    <div class="top">
        <div class="left">
            <img src="assets/download (1).jpeg" width="55" height="55">
            <p>' . $_SESSION['user'] . '</p>
        </div>
        <h1>My Bookshelf</h1>
        <div class="right">
            <a href="server/logout.php"><p>Log out</p></a>
        </div>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="server/library.php">Library</a></li>
                <li><a href="server/mylist.php">My List</a></li>
                <li><a href="server/aboutus.php">About Us</a></li>
            </ul>
        </nav>
    </div>
</header>';
} else {
    echo '
<header class="my-header">
    <div class="top">
        <div class="left">
        </div>
        <h1>My Bookshelf</h1>
        <div class="right">
            <a href="server/login.php"><p>Log in</p>
            </a>
        </div>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="server/library.php">Library</a></li>
                <li><a href="server/aboutus.php">About Us</a></li>
            </ul>
        </nav>
    </div>
</header>';
}
?>
</header>

    <main>
        <article id="quote">
            <div class="box">

                <h2> Quote of The Day!</h3>

                    <div class="left">
                        <img src="assets/book-covers/normal people.jpg" width="200px" height="300px">
                        <button class="add-book">+</button>
                    </div>
                    <div class="right">
                        <p> “Life offers up these moments of joy despite everything.”
                        </p>
                        <p> <b>Normal People</b></p>
                        <p> <b>Sally Rooney</b> </p>
                    </div>
            </div>
        </article>

        <section id="readers">
            <div class="readers1">
                <h2>Readers of The Month! </h2>
                <div class="images">
                    <div class="img-top">
                        <img src="assets/_🐈 _.jpeg" width="170" height="170">
                        <p> username1 </p>
                    </div>
                    <div class="img-buttom">
                        <div>
                            <img src="assets/Pin di Christmas Cats PFP.jpeg" width="170" height="170">
                            <p> username2 </p>
                        </div>
                        <div>
                            <img src="assets/cd2dba06-e97e-4fc0-a135-71445318edfc.jpeg" width="170" height="170">
                            <p> username3 </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        

        if (isset($_SESSION['user'])) {
            echo '
<section id="get-started">
    <div class="get-started1">
        <h2>Start Reading!</h2>
        <div class="options">
            <a href="server/library.php">
                <div>
                    <img src="assets/1.png" width="300" height="300">
                    <p>Library</p>
                </div>
            </a>
            <a href="server/mylist.php">
                <div>
                    <img src="assets/2.png" width="300" height="300">
                    <p>My List</p>
                </div>
            </a>
        </div>
    </div>
</section>';
        } else {
            echo '
<section id="explore">
    <div class="explore1">
        <h2>Explore Our Library!</h2>
        <div>
            <div class="books">
                <div>
                    <img src="assets/book-covers/the cruel prince.jpeg" width="200" height="300">
                    <p>The Cruel Prince</p>
                </div>
                <div>
                    <img src="assets/book-covers/the goldfinch.jpeg" width="200" height="300">
                    <p>The Goldfinch</p>
                </div>
                <div>
                    <img src="assets/book-covers/Pride and Prejudice.jpeg" width="200" height="300">
                    <p>Pride and Prejudice</p>
                </div>
            </div>
        </div>
        <div class="button">
            <p><a href="server/library.php">Go to Library</a></p>
        </div>
    </div>
</section>';
        }
        ?>


    </main>
    <?php
    if (isset($_SESSION['user'])) {
        echo '
    <section id="pop-up">
        <div class="popup-content">
            <p class="p1"> We are working on it! </p>
            <p class="p2"> you will start recieving updated daily quotes from books<br> and add those to your list soon!<br> for now you can check your list or explore our library.</p>
            <div class="popup-buttons">
                <a href="server/mylist.php">
                    <button class="go-to-list"> My List </button>
                </a>
                <a href="server/library.php">
                    <button class="go-to-library">Library </button>
                </a>
                <button class="close">&times;</button>
            </div>
        </div>
    </section>';
    } else {
        echo '
    <section id="pop-up">
        <div class="popup-content">
            <p class="p1"> Log in to continue </p>
            <p class="p2"> To access your account and enjoy personalized features, please log in. <br> If you don\'t
                have an account, you can sign up to join us below.</p>
            <div class="popup-buttons">
                <a href="server/login.php">
                    <button class="go-to-library"> Log In </button>
                </a>
                <a href="server/signup.php">
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

    <script src="javascript/home.js"></script>
</body>


</html>