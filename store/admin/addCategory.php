<html>
<body>


	<?PHP 
		if(isset($_POST['addCategory'])){
			include ('../conn.php');
			session_start();
			$categoryName = mysqli_real_escape_string($conn, $_POST['categoryName']);
			$sql = "INSERT INTO `categories` VALUES ('','$categoryName')";
			$result = mysqli_query($conn, $sql);
			
			if($result) {
				echo "category added!";
			} else {
				echo "there was a problem adding this category";
			}
			
			//print_r($_SESSION);
			//header('location:addArticle.php');
		
		}
		?>


<form action = "addCategory.php" method = "post">

<label> Category name: </label>
<input type = "text" name = "categoryName" autofocus>


<input type = "submit" value = "Add category" name = "addCategory">
</form>




</body>
</html>