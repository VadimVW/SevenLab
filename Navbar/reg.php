<?php require '../includes/db.php'; 

	$data = $_POST;

	

	echo "<div class='errors'> $name </div>";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="../Style/navbar_style_for_reg.css">
	<link rel="stylesheet" href="../Style/reg_style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="../JS_scripts/nav_script.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="../JS_scripts/anim_background.js"></script>

	<!-- Этот скрипт даёт плавное перемещение по якрорям --> 
	<script type="text/javascript">
 		$(function(){
  			$('a[href^="#ancher"]').on('click', function(event) {
    
    		event.preventDefault();
    
    		var sc = $(this).attr("href"),
       			dn = $(sc).offset().top;
    
    		$('html, body').animate({scrollTop: dn}, 1000);

  		});
	});
	</script>

	<script type="text/javascript">
 		$(function(){
  			$('a[href^="#Kharkov_link"]').on('click', function(event) {
    
    		event.preventDefault();
    
    		var sc = $(this).attr("href"),
       			dn = $(sc).offset().top;
    
    		$('html, body').animate({scrollTop: dn}, 1000);

  		});
	});
	</script>

	<!-- Этот скрипт убирает скролл на странице 
	<script type="text/javascript">
 		$("html,body").css("overflow","hidden");
	</script>
	
-->
	
 
	


	
</head>
<body class="body">

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





	<div class="header-background">
		<div class="container">
			<form action="reg.php" method="POST">
				<button class="btn_" name="btn" value="btn" type="submit">
				
				</button>
				<button class="btn_2" name="btn2" value="btn2" type="submit">
				
				</button>
				<button class="btn_3" name="btn3" value="btn3" type="submit">
				
				</button>	
			</form>	
					<div class="name">
						<p class="text">Введите имя</p>
					</div>
						<?php 
						isset($_POST["btn"]) ? show($_POST["btn"]) : 0 ;
                        isset($_POST["btn2"]) ? show($_POST["btn2"]) : 0 ;
                        isset($_POST["btn3"]) ? show($_POST["btn3"]) : 0 ;  
                            function show($var){
                                $var == "btn" ? $focusname = "autofocus" : $focusname = "";
                                $var == "btn2" ? $focuslast = "autofocus" : $focuslast = "";
                                $var == "btn3" ? $focusdate = "autofocus" : $focusdate = "";
                                $block = "  
                        <div class='leftblock'>
                        </div>

                    <form action='reg.php' method='POST'>
                        <input type='text'class=' input_text' name='name' placeholder='Введите имя'$focusname value='$name'>   
                        	<div class='leftblock2'></div>
                        <input type='text' name='lastname' class='input_text2' placeholder='Введите фамилию' $focuslast value='$lastname'>       
                        	<div class='leftblock3'></div>
                        <input type='date' name='birthday' class='input_date' $focusdate value='$birthday'>
                        		
								<input type='submit' class='btn_next_2 text_2' value='Далее' name='btn_next_2'>
							
                    </form>";
                            echo $block;
                            }

                            $name = $_POST["name"];
							$lastname = $_POST["lastname"];
							$birthday = $_POST["birthday"];
							 //echo "<div style='z-index: 5; background: #fff;'>" .  print_r($name) . "</div>";
							echo "<div style='z-index: 5; background: #fff;'>" . "<pre>";
							echo var_dump($data) . "</div>";

                            ?>
					<?php
						$errors_2 = array();

						if ($data['name'] == "") {
							$errors_2[] = "Введите имя!";
						}

						if ($data['lastname'] == "") {
							$errors_2[] = "Введите фамилию!";
						}

						if ($data['birthday'] == "") {
							$errors_2[] = "Введите дату рождения!";
						}

						if (isset($data['btn_next_2'])) {
							if (!empty($errors_2)) {
								echo "<div class='errors'>" . array_shift($errors_2) . " </div> ";
							}							
						}
					 ?>


					<div class="lastname">
						<p class="text">Введите фамилию</p>
					</div>

					<div class="date_birthday">
						<div class="text">
							Дата рождения
						</div>
					</div>	
					
			
				<?php 
					if (isset($data['next'])) {
						echo "<img src='../Image/error.png' class='error_1'> <img src='../Image/error.png' class='error_2'> <img src='../Image/error.png' class='error_3'>";
					}
				?>
				<form action="reg.php" method="POST">
					<button class="btn_next" name="next">
							<h5 class="text">Далее</h5>	
					</button>
				</form>	
					
			
			
					
		</div>		
	</div>

	<!-- Вторая часть регистрации -->

	<div class="step2 container">
		<h3 class="text_step2" id="ancher">ancher</h3>		
			<iframe src="svg_map.html" frameborder="1" width="1540" height="735"></iframe>	
	</div>		

	
	<iframe src="../dist/index.html" frameborder="0" class="bg_reg"></iframe>


	<!-- Третья часть регистрации. Харьков -->
	<?php 


		if (isset($data['do_signup'])) {
			//Ригистрирую
			$errors = array();
			if (trim($data['login_kharkov']) == '') {
				$errors[] = 'Введите логин!';
			}

			if (trim($data['email_kharkov']) == '') {
				$errors[] = 'Введите Email!';
			}

			if ($data['pass_kharkov'] == '') {
				$errors[] = 'Введите пароль!';
			}

			if ($data['pass_kharkov'] != $data['pass_2_kharkov']) {
				$errors[] = 'Пароли не совпадают!';
			}

			


			


			
		}

	?>

	<div class="step2">
		<h3 class="text_step2" id="Kharkov_link">ancher</h3>
			<div class="korzina">
	
				<form action="reg.php#Kharkov_link" method="POST" class="fix_form">
					<input type="text" class="password" name="login_kharkov" placeholder="Введите логин" value="<?php echo @$data['login_kharkov']; ?>"> 
					<input type="email" class="email" name="email_kharkov" placeholder="Введите Email" value="<?php echo @$data['email_kharkov']; ?>"> <br>
					<input type="password" class="password" name="pass_kharkov" placeholder="Введите пароль"><br>
					<input type="password" class="password" name="pass_2_kharkov" placeholder="Подтвердите пароль">


					<button type="submit" class="submit" name="do_signup"> Далее </button>

			<?php

				if (isset($data['do_signup'])) 
				{
					if (empty($errors)) 
					{
						// Ошибок нет. Регистрирую
						$user = R::dispense('users');
						$user->name = $data['name'];
						$user->lastname = $lastname;
						$user->birthday = $birthday;
						$user->login = $data['login_kharkov'];
						$user->email = $data['email_kharkov'];
						$user->password = $data['pass_kharkov'];	
						R::store($user);
						echo "<div class='errors'> <hr>" . "вы зарегестрированы" . "</div>";
					} else {
						echo "<div class='errors'> <hr>" . array_shift($errors) . "</div>";
					} 
				}	
				
			?>
				</form>

			</div>
	</div><br>


	<!-- Третья часть регистрации. Днепр -->

	<div class="step2">
		<h3 class="text_step2" id="Dnepr_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Луганск -->

	<div class="step2">
		<h3 class="text_step2" id="Lugansk_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Донецк -->

	<div class="step2">
		<h3 class="text_step2" id="Doneck_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Запорожье -->

	<div class="step2">
		<h3 class="text_step2" id="Zaporojie_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Херсон -->

	<div class="step2">
		<h3 class="text_step2" id="Herson_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Крым -->

	<div class="step2">
		<h3 class="text_step2" id="Krym_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Николаев -->

	<div class="step2">
		<h3 class="text_step2" id="Nikolaev_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Одесса -->

	<div class="step2">
		<h3 class="text_step2" id="Odesa_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Кировоград -->

	<div class="step2">
		<h3 class="text_step2" id="Kirovograd_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Полтава -->

	<div class="step2">
		<h3 class="text_step2" id="Poltava_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Суммы -->

	<div class="step2">
		<h3 class="text_step2" id="Sumy_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Чернигов -->

	<div class="step2">
		<h3 class="text_step2" id="Chernigov_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Киев -->

	<div class="step2">
		<h3 class="text_step2" id="Kyiv_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Киев -->

	<div class="step2">
		<h3 class="text_step2" id="Kyiv_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Черкассы -->

	<div class="step2">
		<h3 class="text_step2" id="Cherkasy_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Виницца -->

	<div class="step2">
		<h3 class="text_step2" id="Vinnica_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Житомыр -->

	<div class="step2">
		<h3 class="text_step2" id="Zhytomyr_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Хмельницкий -->

	<div class="step2">
		<h3 class="text_step2" id="Khmelnytski_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Ровно -->

	<div class="step2">
		<h3 class="text_step2" id="Rivne_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Тернополь -->

	<div class="step2">
		<h3 class="text_step2" id="Ternopil_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Черновцы -->

	<div class="step2">
		<h3 class="text_step2" id="Chernivtsi_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Ивано-Франковск -->

	<div class="step2">
		<h3 class="text_step2" id="Ivano-Frankivsk_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Волынь -->

	<div class="step2">
		<h3 class="text_step2" id="Volyn_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Львов -->

	<div class="step2">
		<h3 class="text_step2" id="Lviv_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>

	<!-- Третья часть регистрации. Ужгород -->

	<div class="step2">
		<h3 class="text_step2" id="Zakarpatya_link">ancher</h3>
			<div class="korzina">
	
				<form action="" method="POST" class="fix_form">
					<input type="text" class="password" placeholder="Введите логин"> 
					<input type="email" class="email" placeholder="Введите Email"> <br>
					<input type="password" class="password" placeholder="Введите пароль"><br>
					<input type="password" class="password" placeholder="Подтвердите пароль">


					<input type="submit" class="submit" value="Далее"> 
				</form>

			</div>
	</div><br>


  	


</body>

</html>