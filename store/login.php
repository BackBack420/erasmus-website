
	<?PHP 
		if(isset($_POST['login'])){
			include ('conn.php');
			session_start();
			$user = mysqli_real_escape_string($conn, $_POST['user']);
			$pass = mysqli_real_escape_string($conn, $_POST['password']);
			$sql = "SELECT * FROM users WHERE email_us = '$user' AND pass_us = '$pass'";
			
			$result = mysqli_query($conn, $sql);
			
			$rows = mysqli_num_rows($result);
			
			
			if($rows == 1) {
				
				$infouser = mysqli_fetch_array($result);
				$_SESSION['FIRST'] = $infouser['first_us'];
				$_SESSION['LOG'] = 1;
				$_SESSION['USERID'] = $infouser['id_us'];
				$_SESSION['ADMIN'] = $infouser['admin_us'];
				
				
			} else {
				$_SESSION['LOG'] = 0;

			}
			//print_r($_SESSION);
			header('location:index.php');
		
		}
		?>
