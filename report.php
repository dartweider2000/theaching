<!DOCTYPE html>
<html lang="ru">

	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<meta charset="utf-8">
		<title>Пришельцы похители</title>
	</head>

	<body>
		<!--outside cover start-->
		<div class="wrapper">
		
			<header>
				<div class="inner-header">

					<h1 class="whanted">
						Космические пришельцы похищали меня - сообщение о покушении
					</h1>

					<h3 class="declare">
						Расскажите ващшу историю похищения пришельцами:
					</h3>

				</div>
			</header>

			<div class="phpCode">
				<?php

					$name = $_POST['name'] . " " . $_POST['surename'];
					$email = $_POST['email'];
					$when_be = $_POST['whenbe'];
					$how_long = $_POST['howlong'];
					$count = $_POST['count'];
					$tell_their_look = $_POST['telltheirlook'];
					$what_they_did = $_POST['whattheydid'];
					$see = $_POST['see'];
					$inform = $_POST['inform'];

					$_to = "nikita.ivanov574477333@gmail.com";
					$_subject = "Космические пришельцы похители собаку!";
					
					$_msg = "Спасибо за ваш отклик!\n" .
						"1)Имя:             		 	        - $name\n" .
						"2)Когда это произошло?  		 	  - $when_be\n" .
						"3)Как долго вы отсутствовали?  	  - $how_long\n" .
						"4)Сколько их было?             	  - $count\n" .
						"5)Опишите их:                  	  - $tell_their_look\n" .
						"6)Что они делали с вами?       	  - $what_they_did\n" .
						"7)Видели ли вы мою собаку Фэнга?  - $see\n" .
						"8)Дополнительная информация:      - $inform";   

					mail($_to, $_subject, $_msg, "From:" . $email);

					echo "Thank you for filling out this form,<br />";
					echo "Your name is   $name  <br />";
					echo "You have captured " . $when_be;
					echo "  and you have been capturing for " . $how_long . "<br />";
					echo "They had themself in that count: " . $count . "<br />";
					echo "Tell me about their look: " . $tell_their_look . "<br />";
					echo "What did they do with you? - " . $what_they_did . "<br />";
					echo "Could you see my dog name Fang? - " . $see . "<br />";
					echo "Thank you for inform: " . $inform . "<br />";
					echo "Your email: " . $email;					
					
				?>
			</div>

		</div>
		<!--outside cover end-->
	</body>

</html>