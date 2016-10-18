<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="logo">Logo</h1>
        <nav>
            <ul>
                <?php
                    if (isset($_SESSION['user_id'])){
                        echo "<li><a href='index.php'>Home</a></li>
                            <li><a href='#'>Profile</a></li>
                            <li><a href='forum.php'>Forum</a></li>
                            <li><a href='#'>Downloads</a></li>
                            <li><a href='#'>Contact Us</a></li>";
                    }
                    else {
                        echo "<li><a href='index.php'>Home</a></li>
                            <li><a href='#'>Downloads</a></li>
                            <li><a href='forum.php'>Forum</a></li>
                            <li><a href='#'>Contact us</a></li>";
                    }

                ?>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>
        <div id="container">