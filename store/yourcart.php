<?PHP
	session_start();
	include('conn.php');
			$user = $_SESSION['USERID'];
			$sql = "SELECT * FROM cart c JOIN products p ON c.product_cart = p.id_pr WHERE c.user_cart = '$user' ORDER BY c.product_cart DESC;";
			$result = mysqli_query($conn, $sql);
			$rows = mysqli_num_rows($result);
			
			if($rows > 0) {
				while($pr = mysqli_fetch_array($result)) {
					echo $pr['name_pr'];
					echo "  $";
					echo $pr['price_pr'];
					echo "<br>";
					
				}
			} else {
				echo "no products matching the search<br>";
			}
?>