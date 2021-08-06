<?php
session_start();
$title = "Новый пост";
include("connect.php");
if (isset($_POST['submit'])) {
    $postname = $_POST['postname'];
    $email = $_SESSION['login'];
    $text = $_POST['text'];
    if (trim($postname) == "" or trim($text) == ""){
        $oops = "Введите все данные";
    }
    elseif(!isset($oops)){
        mysqli_query($link, "INSERT INTO `posts` (`id`,`postname`,`email`,`date`,`text`,`status`) VALUES (NULL, '$postname','$email',NOW(),'$text','0');");
        header('Location:index.php');
    }
        
    
}
require "header.php";
?>
<section>
    <a href="index.php">назад</a>
    <form method="post">
        <input type="text" name="postname" size="48" placeholder="Тема поста" class="form-control"><br>
        <textarea name="text" rows="15" cols="50" placeholder="Ваше сообщение"></textarea><br>
        <input type="submit" name="submit" value="Создать пост">
    </form>
    <p><?php echo $oops ?></p>
</section>
<?php
require "footer.html";
?>