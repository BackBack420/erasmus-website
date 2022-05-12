
<?PHP 
	include ('conn.php');
	session_start();
	if(isset($_POST['search'])){
		$_SESSION['SEARCHED'] = 1;
		$_SESSION['SEARCHTERM'] = "%".$_POST["searchbox"]."%";
		
	}
	
	header('location: index.php');
?>