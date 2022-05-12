
	<?PHP 
		if(isset($_POST['addProduct'])){
			include ('../conn.php');
			session_start();
			$productName = mysqli_real_escape_string($conn, $_POST['productName']);
			$productPrice = mysqli_real_escape_string($conn, $_POST['productPrice']);
			$productDesc = mysqli_real_escape_string($conn, $_POST['productDescription']);
			$sql = "INSERT INTO `products`(`id_pr`, `name_pr`, `price_pr`, `description_pr`) VALUES ('','$productName','$productPrice', '$productDesc')";
			$result = mysqli_query($conn, $sql);
			
	
			
			//print_r($_SESSION);
			header('location:addArticle.php');
		
		}
		?>
