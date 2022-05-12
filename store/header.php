<?PHP
	
	echo '<div id = "header"> 
	
	
		<a href = "index.php"> HOME </a>
		
		<form action= "search.php" method = "post">
		
		<input type = "text" name = "searchbox">
		<input type = "submit" value = "Search" name = "search">
		<br>
		<br>
		<br>
		
		</form>';
	
	
	
	
	
	if(isset($_SESSION['LOG'])) {
	
	
		if($_SESSION['LOG'] == 1){
			echo "Hello ";
			echo $_SESSION['FIRST'];
			echo "<br><a href = 'logout.php'> Log out </a>";
			echo "<br><a href = 'yourcart.php'> Your cart </a>";
			if($_SESSION['ADMIN']) {
				echo "<br><a href = '/store/admin/admin.php'>admin panel</a>";
			}
		} else {
			echo "invalid user, please try again";
			echo "<br><a href = 'logout.php'> Log out </a>";
		}
	
	
	} else {
	
		echo '<form action="login.php" method = "post">
	
		<label> Login: </label>
		<input type = "text" name = "user"> <br>
		
		<label> Password: </label>
		<input type = "password" name = "password">
		
		<br>
		
		<input type = "submit" value = "Log In" name = "login">

		</form>';
	
	}
	
	?>
	
	
	</div>