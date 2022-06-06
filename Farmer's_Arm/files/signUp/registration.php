

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Farmers' Arm
		
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="images/logo.jpg"/>

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/bascket.jpg" alt="">
			</div>
			<div class="form-inner">
				<form action="registration.php">
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="text" class="form-control" data-validation="email">
					</div>
					<div class="form-group">
						<label >Address:</label>
						<input type="text" name="address" class="form-control" >
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" class="form-control" data-validation="length" data-validation-length="min8">
					</div>

					<div class="dropdown">
						<label for="cars">Select Type:</label>
						<select name="cars" id="cars">
						  <option value="volvo">Farmer</option>
						  <option value="saab">Seller</option>
						  <option value="opel">Admin</option>
						</select>
					</div>

					<button>create my account</button>
					<div class="socials">
						<p>Sign up with social platforms</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
    $email=$_POST['email'];
    $username=$_POST['username'];
	$password=$_POST['password'];
 	$address=$_POST['address'];
    
	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $dbname="farmersarm";
	 // Create connection
	 $conn = mysqli_connect($servername, $username, $password,$dbname);
	 // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	$stmt=$conn->prepare(
		"insert into users(email,username,password,address) values(?,?,?,?)"
	);
	$stmt->bind_param(
		"ssss",
		$email,
		$username,
		$password,
		$address
	);
	$stmt->execute();
	echo 'connect successfully';
}
?>