<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="../Style/navbar_style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="../JS_scripts/nav_script.js"></script>
</head>
<body>

	<nav>
		<div id="nav_anim">
			<div class="container">
				<ul class="nav_menu">
					<li>
						<span class="hover"><a href="../index.php"><img src="../Image/Logo.png" alt="" height="40">На главную</a></span>
					</li>
						<div class="nav_right_menu">
							<li>
								<a href="">Новости</a>
							</li>
							<li>
								<a href="../index.php#yakor">Статьи</a>
							</li>
							<li>
								<a href="reg.php">Регистрация</a>
							</li>
							<li>
								<a href="login.php">Войти</a>
							</li>
						</div>	
				</ul>
			</div>
		</div>	
	</nav>
	
<?php
require '../includes/db.php';
?>



</body>
</html>