 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta charset = "utf-8">
	<title> Placeholder store name </title>
</head>
<body>
	<?PHP session_start();
	include ('header.php'); 
	include ('sidemenu.php');
	include ('conn.php');
	
	echo '<div id = "main">';
		if(isset($_SESSION['SEARCHTERM'])){
		
			$searchTerm = $_SESSION['SEARCHTERM'];
			$sql = "SELECT * FROM products p LEFT JOIN categories c on p.cat_pr = c.id_cat  WHERE p.name_pr LIKE '$searchTerm' ORDER BY id_pr DESC;";
			$result = mysqli_query($conn, $sql);
			$rows = mysqli_num_rows($result);
			
			if($rows > 0) {
				while($pr = mysqli_fetch_array($result)) {
					echo $pr['name_pr'];
					echo "  $";
					echo $pr['price_pr'];
					echo " ";
					echo $pr['name_cat'];
					if(isset($_SESSION['FIRST'])){
						echo '<form action = "cart.php" method = "post"><input type = "hidden" name = "id_pr" value = "';
						echo $pr['id_pr'];
						echo '">';
						echo '<input type = "submit" name = "cart" value = "Add to cart"></form>';
					} else {
						echo "             <b>you need to be logged in to use the cart</b>";
					}
					echo "<br>";
				}
					
			} else {
				echo "no products matching the search<br>";
			}
		} else {
			echo "use the searchbar";
		}
	
	echo '</div>';
	
	?>
	

</body>
</html> 