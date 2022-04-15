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
                                <a href="index.php">Products</a>
                                <ul>
                                    <li><a href="index.php">Products List</a></li>
                                    <li><a href="addproduct.php">Add Product</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                    <li class="dropdown ">
                        <a href="Agri_Tips.html">Orders</a>
                        
                    </li>
                    
                   
                  
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="contact.html">Log out</a>
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
      <?php
include("footer1.php");



?>
</html>
      <script>
        $('#prod').dataTable()
      </script>