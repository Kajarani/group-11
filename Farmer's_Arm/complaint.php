<?php
session_start();
?>
<html>
	<head>
		<title>Complaints|Farmer's Arm</title>
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
		<script src="./bootstrap/js/bootstrap.js"></script>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service || Agrikol || Agriculture Form HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- Css-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vegas.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/agrikol_iconl.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	</head>
	<body>
         <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Services</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Services</span></li>
                </ul>
            </div>
        </section>

		
		<div class="container">
			<div class="jumbotron">
				<h2>Make your complaints here!</h2><br />
				<form method="post" action="problems.php">
					<p>Complaint_ID<br />
					<input class="form-control" type="text"   value= >
					<p>Email-Id<br />
					<input class="form-control" style="width:30%;" type="email" placeholder="Enter your email id" value="<?php if(isset($_SESSION["name"])) echo $_SESSION["email"] ?>" name="email" />
					
					<p>Complaint<br />
					<textarea class="form-control" style="width:70%;" rows="5" placeholder="Enter your complaints here"></textarea><br />
					<input class="btn btn-default" type="submit" name="submit" value="Submit">
					<?php
						if(isset($_POST["submit"])){							
							$name=$_POST["name"];
							$email=$_POST["email"];
							$subject=$_POST["subject"];
							echo "<br />Problem Reported";
							}
					?>
				</form>
			</div>
		</div>
	</body>
</html>