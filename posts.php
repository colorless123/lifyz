<?php session_start();
include("connect.php"); ?>
<?php require "header.php"; ?>
<section>
    <a href="index.php">назад</a>
    <?php
    $sql = mysqli_query($link, "SELECT * FROM `posts`");
    while ($result = mysqli_fetch_array($sql)) :
        require("post.php");
    endwhile; ?>
</section>
<?php require "footer.html" ?>