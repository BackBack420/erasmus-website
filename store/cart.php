<?PHP
session_start();
include ('conn.php');
echo $_POST['id_pr'];
echo $_SESSION['USERID'];
	
		if(isset($_POST['cart'])){
			
			
			$product = mysqli_real_escape_string($conn, $_POST['id_pr']);
			$user = $_SESSION['USERID'];
			
			$sql = "INSERT INTO `cart` VALUES ('$user','$product','')";
			$result = mysqli_query($conn, $sql);
			
			if($result) {
				echo "product added!";
				echo "<script> console.log('added to cart!')</script>";
			} else {
				echo "there was a problem adding this product";
			}
		}
	header("location: index.php");
?>