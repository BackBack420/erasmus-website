<?PHP
$db_user = "root";
$db_pass = "";
$db_name = "erasmus";
$db_host = "localhost";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn) {
	echo "maintenance break, please come back later<br>sorry for the inconvinience";
	exit;
}