
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uzytkownicy";

$conn = new mysqli($servername, $username, $password, $dbname);

$pieprz = "1qaz7UHN";
$hash = password_hash(mysqli_real_escape_string($conn, $_POST["password"]).$pieprz, PASSWORD_DEFAULT);
echo "<p>".$hash."</p>";
$sql = "INSERT INTO uzytkownik (login, hash) VALUES (\"".mysqli_real_escape_string($conn, $_POST["username"])."\" , \"".$hash."\")";
echo "<p>".$sql."</p>";
$conn->query($sql);
echo "<p>".$conn->error."</p>";
?>
zarejestrowano!
<a href="logowanie.php">zaloguj</a>

</body>
</html>
