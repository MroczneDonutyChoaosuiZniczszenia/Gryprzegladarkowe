
<!DOCTYPE html>

<html>
	<head>
		<title>Strona</title>
	<meta charset="UTF-8">
	</head>
<body>

 <?php

?>
Dzisiaj jest: <?php echo date("d F o");
?>

<form action = 'zarejestrowano.php' method = "POST">
	Nazwa uzytkownika: <input type = "text" name = "username"/><br/>
	Haslo: <input type = "password" name = "password"/><br/>
	<input type = "submit" value = "zarejestruj"/><br/>
<form>
</body>
</html>
