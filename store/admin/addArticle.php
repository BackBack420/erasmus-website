<html>
<body>


	<?PHP 
	session_start();
	include ('../conn.php');
		
	
		if(isset($_POST['addProduct'])){
			
			
			$productName = mysqli_real_escape_string($conn, $_POST['productName']);
			$productPrice = mysqli_real_escape_string($conn, $_POST['productPrice']);
			$productDesc = mysqli_real_escape_string($conn, $_POST['productDescription']);
			$productCat = mysqli_real_escape_string($conn, $_POST['productCat']);
			$sql = "INSERT INTO `products`(`id_pr`, `name_pr`, `price_pr`, `cat_pr`, `description_pr`) VALUES ('','$productName','$productPrice', $productCat, '$productDesc')";
			$result = mysqli_query($conn, $sql);
			
			if($result) {
				echo "product added!";
			} else {
				echo "there was a problem adding this product";
			}
			
			//print_r($_SESSION);
			//header('location:addArticle.php');
		
		}
		?>


<form action = "addArticle.php" method = "post">

<label> Product name: </label>
<input type = "text" name = "productName" autofocus>
<br> <label> Product price: </label>
<input type = "number" name = "productPrice" min = "0" step = "0.01"><br>
<label> Category: </label>
<?PHP
	$sql = "SELECT * FROM `categories` ORDER BY name_cat";
	$result = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($result);
	if($rows > 0) {
		echo '<select name = "productCat">';
		while($cat = mysqli_fetch_array($result)){
			echo '<option value = "';
			echo $cat['id_cat'];
			echo '">';
			echo $cat['name_cat'];
			echo '</option>';
		}
	}
?>
</select>
<br>
<textarea name = "productDescription" rows = "4" cols = "30">
Put a short description of the product here
</textarea><br>


<input type = "submit" value = "Add product" name = "addProduct">
</form>




</body>
</html>