<?php session_start();
if (isset($_SESSION['login'])) {
    header('Location:index.php');
}
$title = "Личный кабинет";
include("connect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
$numrows = mysqli_num_rows($query);
if (isset($_POST['email'])) {
	if ($numrows > 0
	) {
		$_SESSION['login'] = $email;
		header('Location:index.php');
	} else {
		$error = 'Вы ввели неверный данные';
	}
}

?>








<?php
require "header.php";
?>
<div class="top name">
	<p><?php echo $title ?></p>
</div>
<section class="content">
	<form method="POST">
		<input type="email" name="email" placeholder="Введите email" class="form-control"><br>
		<input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
		<input name="submit" type="submit" value="Войти"><br>
		<?php echo ($error) ?>
	</form>
</section>
	<?php
	require "footer.html";
	?>