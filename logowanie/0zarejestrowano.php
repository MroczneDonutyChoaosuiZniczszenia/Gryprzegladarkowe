
<html>
<body>
<?php
$servername = "localhost";
$username = "root1";
$password = "1";
$dbname = "uzytkownicy";

$conn = new mysqli($servername, $username, $password, $dbname);



$pieprz = "1234";
$hash = password_hash(mysqli_real_escape_string($conn, $_POST["password"]).$pieprz, PASSWORD_DEFAULT);
$sql = "INSERT INTO uzytkownik (username, hash) VALUES (\"".mysqli_real_escape_string($conn, $_POST["username"])."\" , \"".$hash."\")";

$conn->query($sql);

?>
zarejestrowano!
<a href="logowanie.php">zaloguj</a>

</body>
</html>