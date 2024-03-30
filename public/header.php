<?php
    session_start();
?>

<!doctype html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script> WebFont.load({google: {families: ['Press Start 2P']}});</script>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"> -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <nav>
            <div class="wrapper">
                <!-- <a href="../scripts/index.php"></a> -->
                <ul>
                <li><a href="index.php">Home</a></li> 
                <li><a href="../private/scripts/discover.php">About Us</a></li> 
                <li><a href="../private/scripts/blog.php">Find Blogs</a></li> 
                <?php 
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='../private/scripts/profile.php'>Profile Page</a></li>";
                        echo "<li><a href='../private/scripts/includes/logout.h.php'>Log Out</a></li>";
                    }
                    else {
                        echo "<li><a href='../private/scripts/signup.php'>Sign Up</a></li>";
                        echo "<li><a href='../private/scripts/login.php'>Log in</a></li>";
                    }
                ?>
                </ul>
            </div>
        </nav>


        <!-- main content -->
        <div class="wrapper">
            