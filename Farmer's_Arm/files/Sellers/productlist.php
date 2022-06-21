 <?php
include("../db.php");



?>
<html>
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
                <img src="assets/images/resources/logo.jpg"  width="234" height="90" class="main-logo" alt="Awesome Image" />
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
                        <li class="dropdown current">
                                    <a href="index.php">Home</a>
                                   <!-- /.sub-menu -->
                                </li>
                                <li class="dropdown ">
                                    <a href="ViewOrders.php">View Orders</a>
                                   <!-- /.sub-menu -->
                                </li>
                                <li class="dropdown">
                                    <a href="http://localhost/group-11/Farmer's_Arm/files/logout.php">Log Out</a>
                                   <!-- /.sub-menu -->
                                </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

            <div class="main-nav__right">
                <div class="icon_cart_box">
                    <a href="cart.html">
                        <span class="icon-shopping-cart"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<section class="page-header" style="background-image: url(assets/images/backgrounds/image2.jpg);">
        <div class="container">
            <h2>Product List</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="Agri_Tips.html">Products</a></li>
                <li><span>Product list</span></li>
            </ul>
        </div>
    </section>
      <!-- End Navbar -->
      <p><div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              
              <div class="card-body">
                <div class="col-md-2 offset-md-10"> <a class=" btn btn-primary " href="index.php?page=addproduct">Add New</a></div> 
                <br>
                <div class="table-responsive ps">
                  <table class="table table-striped " id="prod">
                    <thead class="">
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"SELECT product_id,product_image, product_name,unit_price from product   order by product_name asc");

                        while(list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../product_images/$image' style='width:50px; height:50px;'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td class='text-center'>
                        <a class=' btn btn-primary btn-sm' href='index.php?page=addproduct&id=$product_id'>Edit</a>
                        <a class=' btn btn-danger btn-sm' href='electroniclist.php?product_id=$product_id&action=delete'>Delete</a>
                        </td></tr>";
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
                    </body>
</html>
      <script>
        $('#prod').dataTable()
      </script>