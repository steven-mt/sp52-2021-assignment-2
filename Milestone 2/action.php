<!DOCTYPE html>
<html lang="en">
<head>
	<title>Petite Treats Bakery</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>Petite Treats Bakery</h1>
	
	<div class="navbar">
		<a href="index.html" class="active">Home</a>
		<a href="menu.html">Menu</a>
		<a href="specials.html">Specials</a>
		<a href="about.html">About Us</a>
	</div>

	<h2>Information Sent!</h2>

	<p>We have added the following information to our files regarding your interests:</p>
	
	<p>
		Name: <?php echo $_POST["name"] ?><br>
	
		Email: <?php echo $_POST["email"] ?><br>

		Product interests: 
		<?php 
			$str = "";
			foreach($_POST['prod'] as $value){
				if ($str != "") {
					$str .= ", " . $value;
				}
				else {
					$str .= $value;
				}
			}
			echo $str
		?><br>
		
		Birthday : 
		<?php 
			$timestamp = strtotime($_POST['birthday']); 
			$date=date('d M', $timestamp);
			echo $date
		?>
	</p>
</html>