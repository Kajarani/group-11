<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="farmersarm";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
?>
<?php

$query="select * from complaint order by id desc limit 1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$last_id=$row['id'];
if ($last_id == "")
        {
            $complaint_ID = "COM1";
        }
        else
        {
            $complaint_ID = substr($last_id, 3);
            $complaint_ID = intval($complaint_ID);
            $complaint_ID = "COM" . ($complaint_ID + 1);
        }

?>
<?php
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $farname = $_POST["farname"];
            $email = $_POST["email"];
            $complaint= $_POST["complaint"];
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO complaint (id,farname,email,complaint)VALUES ('$id','$farname',' $email','  $complaint')";
            if (mysqli_query($conn, $sql)) {
           
                header('location:complaints.php');   
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        

?>
 


<!DOCTYPE html>
<html lang="en">

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

    

        <section class="page-header" style="background-image: url(assets/images/backgrounds/bgimage1.jpg);">
            <div class="container">
                <h2>Complaints</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Complaint</span></li>
                </ul>
            </div>
        </section>

        

        
<section  class="service_four service_page">
        <div class="container">
			<div style="background-color:#edf3eb" class="jumbotron">
				<h2>Make your complaints here!</h2><br />
				<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p>Complaint_ID<br />
					<input class="form-control" style="width:30%;" type="text"   name="id" id="id" value="<?php echo $complaint_ID; ?>" readonly="" >
                    <p>Name<br />
                        <input class="form-control" type="text" placeholder="Enter your name" name="farname" id="farname" >
					<p>Email-Id<br />
					<input class="form-control" style="width:30%;" type="email" placeholder="Enter your email id" name="email" id="email">
					<p>Complaint<br />
					<textarea class="form-control" style="width:70%;" rows="5" placeholder="Enter your complaints here" name="complaint" id="complaint"></textarea><br />
					<button type="submit" class="btn btn-primary">Post</button>
                    <button type="reset" class="btn btn-primary">Cancel</button>

					
				</form>
			</div>
		</div>
    </section >
        <section class="faq_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq_one_left">
                            <div class="block-title text-left">
                                <p>frequently asked questions</p>
                                <h3>have any question?</h3>
                                <div class="leaf">
                                    <img src="assets/images/resources/leaf.png" alt="">
                                </div>
                            </div>
                            <div class="faq_one_image"
                                style="background-image: url(assets/images/resources/image2.jpg)">
                                <div class="phone_number">
                                    <p>If you have emergency call nows<a href="tel:888-999-0000">666 888 0000</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq_one_right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>Why are your tours so expensive?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                                ligula, molestie ullamcorper vulputate vitae sodales commodo nisl. Nulla
                                                facilisi. Pellentesque est metus many of eration in some form.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion ">
                                    <div class="accrodion-title">
                                        <h4>Which payment methods are acceptable?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                                ligula, molestie ullamcorper vulputate vitae sodales commodo nisl. Nulla
                                                facilisi. Pellentesque est metus many of eration in some form.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to book the new tour for 2 persons?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                                ligula, molestie ullamcorper vulputate vitae sodales commodo nisl. Nulla
                                                facilisi. Pellentesque est metus many of eration in some form.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <footer class="site-footer">
            <div class="site-footer_farm_image"><img src="assets/images/resources/site-footer-farm.png"
                    alt="Farm Image"></div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__title">
                                <h3>About</h3>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla placerat posuere dui. Pellentesque
                                    venenatis sem non lacus ac auctor.</p>
                            </div>
                            <form>
                                <div class="footer_input-box">
                                    <input type="Email" placeholder="Email Address">
                                    <button type="submit" class="button"><i class="fa fa-check"></i></button>
                                   

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__link wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="projects.html">Our Projects</a></li>
                                <li><a href="farmers.html">Meet the Farmers</a></li>
                                <li><a href="news.html">Latest News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column footer-widget__news wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>News</h3>
                            </div>
                            <ul class="footer-widget__news list-unstyled">
                                <li>
                                    <div class="footer-widget__news_image">
                                        <img src="assets/images/resources/footer-1-img-1.jpg" alt="">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="news_detail.html"> Learn 10 Best Tips for New Formers</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>30 Oct, 2019</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__news_image">
                                        <img src="assets/images/resources/footer-1-img-2.jpg" alt="">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="news_detail.html">Farmer Sentiment Darkens Hopes Fade</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>30 Oct, 2019</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column footer-widget__contact wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3>Contact</h3>
                            </div>
                            <div class="footer-widget_contact">
                                <p>66 Broklyn Street, New Town<br>DC 5752, New Yrok</p>
                                <a href="mailto:needhelp@agrikol.com">needhelp@agrikol.com</a><br>
                                <a href="tel:666-888-0000">666 888 0000</a>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-footer_bottom">
            <div class="container">
                <div class="site-footer_bottom_copyright">
                    <p>@ All copyright 2020, <a href="#">Layerdrops.com</a></p>
                </div>
                <div class="site-footer_bottom_menu">
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>




    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <div class="side-menu__block">


        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="assets/images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p><a href="mailto:needhelp@tripo.com">needhelp@tripo.com</a> <br> <a href="tel:888-999-0000">888 999
                        0000</a></p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->



    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/appear.js"></script>

    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
</body>

</html>