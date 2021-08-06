<?php session_start();
$title = "Главная страница";
?>
<section class="content">
	<div class="animegif">
		<?php require "header.php"; ?>
		<?php if (empty($_SESSION['login'])) { ?>
			<div class="maintop">
				<div class="отступ"></div>
				<div class="mainname">
					<h1>Приветик хикка, мы ждали тебя<br>
						общение в интернете лучше чем на улице</h1>
				</div>
				<div class="отступ"></div>
				<div class="next">
					<ul>
						<li><a href="register.php">
								<div class="next1">зарегистрироваться</div>
							</a></li>
						<li><a href="login.php">
								<div class="next2">войти</div>
							</a></li>
					</ul>
				</div>
			</div>
			<style>
				.animegif {
					background-image: url(../img/yes.gif);
					background-position: center center;
					background-repeat: no-repeat;
					background-size: cover;
					background-clip: border-box;
				}
			</style>
		<?php } ?>
	</div>
	<?php if (isset($_SESSION['login'])) { ?>
		<div class="logyes">
			<h2>Привет, мы очень рады тебя видеть</h2>
			<ul>
				<li><a href="newpost.php">Создать пост</a></li>
				<li><a href="posts.php">Все посты</a></li>
			</ul>
		</div>
	<?php } ?>
</section>
<?php
require "footer.html";
?>