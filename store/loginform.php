 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta charset = "utf-8">
	<title> Placeholder store name </title>
</head>
<body>
	<style><?php include 'C:/xampp/htdocs/store/stylesheet.css'; ?></style>
	<?PHP include ('header.php'); ?>
	<?PHP include ('sidemenu.php'); ?>
	
	<div id = "login" method = "post">
	
	<form action="loggedin.php">
	
		<label> Login: </label>
		<input type = "text" id = "login"> <br>
		
		<label> Password: </label>
		<input type = "password" id = "password">

	</form>
	
	</div>

</body>
</html> 