<!DOCTYPE html>
<html lang="en">
<body>
	<head>
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $title ?></title>
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	</head>
	<header>
		<a class="main" href="index.php">
			<div class="logo">
				<img src="img/logo.png" alt="" draggable="false">
			</div>
		</a>
		<ul class="log">
			<li>
				<?php if (empty($_SESSION['login'])) { ?>
					<div class="ash">
						<a href="login.php">личный кабинет</a>
					</div>
				<?php } ?>
			</li>
			<li>
				<?php if (empty($_SESSION['login'])) { ?>
					<div class="ash">
						<a href="register.php">регистрация</a>
					</div>
				<?php } ?>
			</li>
			<li>
				<div class="vivoshli">
					<?php
					if (isset($_SESSION['login'])) {
						$shli = $_SESSION['login'];
					}
					?><?= $shli ?>
				</div>
			</li>
			<li>
				<?php if (isset($_SESSION['login'])) { ?>
					<div class="ash">
						<a href="exit.php">выход</a>
					</div>
				<?php } ?>
			</li>
		</ul>
	</header>