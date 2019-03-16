<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Hutzker Обратная связь";
		require_once "blocks/head.php" 
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready (function () {
			$("#done").click (function () {
				$('#messageShow').hide ();
				
				var name = $("#name").val ();
				var email = $("#email").val ();
				var subject = $("#subject").val ();
				var message = $("#message").val ();
				var fail = "";
				
				if (name.length < 3) fail = "Имя должно состоять, как минимум, из двух символов!";
				else if (email.split ('@').length - 1 == 0 || email.split('.').length - 1 == 0)
					fail = "Введите корректный email!";
				else if (subject.length < 5) fail = "Тема сообщения должна состоять, как минимум, из пяти символов!";
				else if (message.length < 20) fail = "Cообщениe должнo состоять, как минимум, из двадцати символов!";
				
				if (fail != "") {
					$('#messageShow').html (fail + "<div class=''><br></div>");
					$('#messageShow').show ();
					return false;
				}
				
				$.ajax ({
					url: '/ajax/feedback.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'message': message},
					dataType: 'html',
					success: function (data) {
							$('#messageShow').html (data + "<div class=''><br></div>");
							$('#messageShow').show ();
					}
				});
			});
		});
	</script>
</head>
<body>
	<?php 
		require_once "blocks/header.php" 
	?>
	<div id="wrapper">
		<div id="leftCol">
			<div class="aboutUs">
				<p>На странице обратной связи вы можете сделать заказ или задать интересующий вас вопрос администратору магазина Hutzker. Просто заполите формы и нажмите конопку "Отправить"</p>
			</div>
			<input type="text" placeholder="Имя" id="name" name="name"><br/>
			<input type="text" placeholder="Email" id="email" name="email"><br/>
			<input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br/>
			<textarea name="message" id="message" placeholder="Введите сюда ваше сообщение"></textarea><br/>
			<div id="messageShow"></div>
			<input type="button" name="done" id="done" value="Отправить"><br/>
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>