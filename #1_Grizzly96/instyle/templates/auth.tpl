<html>
<head>
  	<title>Интернет-магазин &laquo;Grizzly96.ru&raquo;</title>
  	<link rel="stylesheet" type="text/css" href="/instyle/style.css" />
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
</head>

<body>
 	<div class="auth_logo">
 	</div>
 	<div class="auth_div">
 		<form action="index.php" method="POST">

			<div class="auth_item_div">
 				<div>Логин</div>
				<input type="text" size="20" name="login" class="auth_input" />
        	</div>

 			<div class="auth_item_div">
 				<div>Пароль</div>
				<input type="password" size="20" name="password" class="auth_input" />
 			</div>

 			<input type="hidden" name="auth_action" value="login"/>
			<input type="image" src="/instyle/images/auth_button.jpg" value="Войти" class="auth_button" />
 		</form>
 	</div>
</body>

</html>