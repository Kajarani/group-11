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


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            
            $_SESSION['uname'] = $uname;
            $sql="select role_id from user where username='".$uname."' and password='".$password."'";
            $result1= mysqli_query($conn,$sql);
            $row1= mysqli_fetch_array($result1);

            switch($row1['role_id']){
                case "1":
                    echo "<script>
            alert('You are successfully login as Admin');
            window.location.href='../Admin/adminhome.php';
            </script>";
                   
                    break;
                    case "2":
    
                        echo "<script>
            alert('You are successfully login as Farmer');
            window.location.href='../index.html';
            </script>";
                        break;
                        case "3":
                            echo "<script>
            alert('You are successfully login as Seller');
            window.location.href='../Sellers/index.php';
            </script>";
                            break;
                            default:
                            echo "<script>
                           
                            window.location.href='UserLogin.php';
                            alert('Invalid Password or Username');
                            </script>";
                                
            }

        
    }
        else{
            echo "<script>
            alert('Invalid Password or Username');
            window.location.href='UserLogin.php';
            </script>";
        }

        }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farmers' Arm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="UserLogin.php" method="post">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					<?php 

					error_reporting(0);
					session_start();
					session_destroy();
			
				echo $_SESSION['loginMessage'];
			

					?>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="username" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
		
					<br>
			
				<p>
					<div class="container-login100-form-btn">
						
                        <button class="login100-form-btn"  value="Submit" name="but_submit" id="but_submit" >Sign In</button>
					</div></p>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="../signUp/index.html" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>