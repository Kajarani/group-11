 
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="farmersarm";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	$role_id=$_POST['txt_role'];

	if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql="INSERT INTO user (email,username,password,address,role_id)VALUES('$email','$username',$password','$address',$role_id)";
            if (mysqli_query($conn, $sql)) {
           
				header("location:http://localhost/group-11/Farmer's_Arm/files/Login_v17/UserLogin.php");      
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
	
	
}

?>

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
			
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-header">
						<h3>Sign up</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
			
					
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" name="username" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="text" name="email" class="form-control" data-validation="email">
					</div>
					<div class="form-group">
						<label >Address:</label>
						<input type="text" name="address" class="form-control" >
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input  name="password" type="password" class="form-control" data-validation="length" data-validation-length="min8">
					</div>

					<div class="dropdown">
						<label for="cars">Select Type:</label>
						<select name="txt_role" id="cars">
						<option value="" selected="selected"> -select role- </option>
						  <option value="volvo">Farmer</option>
						  <option value="saab">Seller</option>
						  
						</select>
					</div>
<div class="form-group"  align="center">
					<input type="submit" name="btn_register" value="Register">
</div>
					
				</form>
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
