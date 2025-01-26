<?php

session_start();

if (isset($_SESSION['user'])) {
    echo '
<header class="my-header">
    <div class="top">
        <div class="left">
            <img src="../assets/download (1).jpeg" width="55" height="55">
            <p>' . $_SESSION['user'] . '</p>
        </div>
        <h1>My Bookshelf</h1>
        <div class="right">
            <a href="logout.php"><p>Log out</p></a>
        </div>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="library.php">Library</a></li>
                <li><a href="mylist.php">My List</a></li>
                <li><a href="aboutus.php">About Us</a></li>
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
            <a href="login.php"><p>Log in</p>
            </a>
        </div>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="library.php">Library</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </nav>
    </div>
</header>';
}
?>
