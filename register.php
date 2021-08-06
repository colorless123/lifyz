<?php session_start();
if (isset($_SESSION['login'])) {
    header('Location:index.php');
}
$title = "Регистрация";
include("connect.php");
$email = $_POST['email'];
$pass = $_POST['password'];
$query = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email'");
$numrows = mysqli_num_rows($query);
if (isset($_POST['email']))
    if (trim($email) == "" || trim($pass) == "")
        $oops = "Введите все данные";
    elseif ($numrows > 0)
        $oops = "Такой пользователь уже существует";
    elseif (!isset($oops)) {
        mysqli_query($link, "INSERT INTO `users` (`id`,`email`,`password`) VALUES (NULL, '$email', '$pass');");
        $_SESSION['login'] = $email;
        header('Location:index.php');
}
require "header.php";
?>
<p><?php echo $title ?></p>
<section class="content">

    <form method="post">
        <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
    <p><?php echo $oops ?></p>
</section>

<?php
require "footer.html";
?>