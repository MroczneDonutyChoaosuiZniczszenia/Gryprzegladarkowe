
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uzytkownicy";

$conn = new mysqli($servername, $username, $password, $dbname);

$pieprz = "1qaz7UHN";

$sql = "SELECT id, hash FROM uzytkownik WHERE login = '".mysqli_real_escape_string($conn, $_POST["username"])."';";

$result = $conn->query($sql);

//echo "<p>".$sql."</p>";
//echo "<p>".$conn->error."</p>";

$row = $result->fetch_assoc();

$username = mysqli_real_escape_string($conn, $_POST["username"]);


if(password_verify(mysqli_real_escape_string($conn, $_POST["password"]).$pieprz, $row['hash']))
{
	$_SESSION['zalogowany']=$row['id'];
	echo "Witaj ".$username;

} else{
	session_unset();
	echo "Buuuu nie działa haseło lub login!!!"
	?><br/>
	<a href="logowanie.php">powrót do logowania</a><?php
}

?>

</body>
</html>
