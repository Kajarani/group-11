<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Orders || Farmer's_Arm</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/logo.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/logo.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/logo.jpg">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->


    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">




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

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<div class="site-header__header-one-wrap">

        <div class="topbar-one">
            <div class="topbar_bg" style="background-image: url(assets/images/shapes/header-bg.png)"></div>
            <div class="container">
                <div class="topbar-one__left">
                    <a href="mailto:needhelp@tripo.com"><span class="icon-message"></span>needhelp@farmersarm.com</a>
                    <a href="tel:666-999-0000"><span class="icon-phone-call"></span>0911234567</a>
                </div>
                <div class="topbar-one__middle">
                    <a href="index.html" class="main-nav__logo">
                        <img src="assets/images/resources/logo2.jpg"  width="234" height="90" class="main-logo" alt="Awesome Image" />
                    </a>
                </div>
                <div class="topbar-one__right">
                    <div class="topbar-one__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <header class="main-nav__header-one">
            <nav class="header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left">
                        <a href="#" class="main-nav__search search-popup__toggler"><i
                                class="icon-magnifying-glass"></i></a>
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                        <li class="dropdown ">
                                    <a href="index.php">Home</a>
                                   <!-- /.sub-menu -->
                                </li>
                                <li class="dropdown current">
                                    <a href="ViewOrders.php">View Orders</a>
                                   <!-- /.sub-menu -->
                                </li>
                                <li class="dropdown">
                                    <a href="http://localhost/group-11/Farmer's_Arm/files/logout.php">Log Out</a>
                                   <!-- /.sub-menu -->
                                </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                    
                </div>
            </nav>
        </header>
        
        <section class="page-header" style="background-image: url(assets/images/backgrounds/bgimage1.jpg);">
            <div class="container">
                <h2>View Orders</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>View Orders</span></li>
                </ul>
            </div>
        </section>
        <p><div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              
              <div class="card-body">
                
                <div class="table-responsive ps">
                  <table class="table table-striped " id="prod">
                    <thead class="">
                      <tr>
                        <th>ID</th>
                        <th>Farmer Name</th>
                        <th>Delivery Address</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"SELECT * from orderproduct order by id asc");

                        while(list($id,$farname,$delivery_address,$product_name,$quantity)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$id</td>
                        <td>$farname</td>
                        <td>$delivery_address</td>
                        <td>$product_name</td>
                        <td>$quantity</td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            
           

          </div>
          
          
        </div>
      </div>
                      </p>
        
        

        

        

        <footer class="site-footer">
            <div class="site-footer_farm_image"><img src="assets/images/resources/site-footer-farm.png"
                    alt="Farm Image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__title">
                                <h3>About</h3>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>We Strive to Develop Better Fertilizer and Production Technologies to Smallholder Farmers. 
                                 Increasing Farm Productivity, Profitability, and Sustainability.</p>
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
                        <div class="footer-widget__column margin_left_30 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="file:///C:/xampp/htdocs/group-11/Farmer's_Arm/oganic-organic-food-bootstrap-html-template-2022-02-21-23-53-23-utc/oganic/blog.html">Blogs</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>News</h3>
                            </div>
                            <ul class="footer-widget__news list-unstyled">
                                <li>
                                    <div class="footer-widget__news_image">
                                        <img src="assets/images/blog/b1.jpg" alt="" height="50" width="50">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="file:///C:/xampp/htdocs/group-11/Farmer's_Arm/oganic-organic-food-bootstrap-html-template-2022-02-21-23-53-23-utc/oganic/Tec.html"> Technology in Modern Farming</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>04 June, 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__news_image">
                                        <img src="assets/images/blog/b2.jpg" alt="" height="50" width="50">
                                    </div>
                                    <div class="footer-widget__news_text">
                                        <p><a href="file:///C:/xampp/htdocs/group-11/Farmer's_Arm/oganic-organic-food-bootstrap-html-template-2022-02-21-23-53-23-utc/oganic/Farmer.html">Farmers' role in a farm</a></p>
                                    </div>
                                    <div class="footer-widget__news_date_box">
                                        <p>04 June, 2022</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget__column wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3>Contact</h3>
                            </div>
                            <div class="footer-widget_contact">
                                <p>Farmers' Arm,<br>Belihuloya ,Sri Lanka</p>
                                <a href="mailto:needhelp@agrikol.com">needhelp@Farmers'Arm.com</a><br>
                                <a href="tel:666-888-0000">091-1234567</a>
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
                    <p>@ All copyright 2020, <a href="#">farmers</a></p>
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
                <p><a href="mailto:needhelp@tripo.com">needhelp@agrikol.com</a> <br> <a href="tel:888-999-0000">888 999
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
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
</body>

</html>