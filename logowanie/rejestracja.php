
<!DOCTYPE html>

<html>
	<head>
		<title>Strona</title>
	<meta charset="UTF-8">
	</head>
<body>

 <?php
$servername = "localhost";
$username = "root1";
$password = "1";
$dbname = "uzytkowncy";

$conn = new mysqli($servername, $username, $password);

?>
Dzisiaj jest: <?php echo date("d F o");
?>

<form action = 0zarejestrowano.php method = "POST">
	Nazwa uzytkownika: <input type = "text" name = "username"/><br/>
	Haslo: <input type = "password" name = "password"/><br/>
	<input type = "submit" value = "zarejestruj"/><br/>
<form>
</body>
</html>