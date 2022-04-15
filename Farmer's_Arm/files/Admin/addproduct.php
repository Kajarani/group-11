  <?php
include '../db.php';


if(isset($_GET['id'])){

  $qry = mysqli_query($conn,"SELECT * FROM product where product_id = ".$_GET['id']);
  foreach(mysqli_fetch_array($qry) as $key => $val){
    $meta[$key] = $val;
  }
}

?>
<?php include 'header.php' ?>
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
            <h2>Add Product</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="Agri_Tips.html">Products</a></li>
                <li><span>Add Product</span></li>
            </ul>
        </div>
    </section>
      <!-- End Navbar -->
      <p><div class="content">
        <div class="container-fluid">
          <form action="" id="manage-prod">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="hidden"  name="product_id" class="form-control" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                        <input type="text" id="product_name" required name="product_name" class="form-control" value="<?php echo isset($meta['product_name']) ? $meta['product_name'] : '' ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <img src="../product_images/<?php echo isset($meta['product_image']) ? $meta['product_image'] : '' ?>" alt="" class="img-field" width="75" height="100">

                        <label for="">Product Image</label>
                        <input type="file" name="picture" <?php echo isset($meta['product_image']) ? 'required' : '' ?> class="btn btn-fill" id="picture" onchange="displayImg(this,$(this))">
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"><?php echo isset($meta['product_desc']) ? $meta['product_desc'] : '' ?></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" value="<?php echo isset($meta['unit_price']) ? $meta['unit_price'] : '' ?>" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <select name="category_id" id="category_id" class="default-browser custom-select select2">
                          <option value=""></option>
                          <?php 
                          $cat = mysqli_query($conn,"select * from category");
                          while($row = mysqli_fetch_assoc($cat)):
                          ?>
                            <option value="<?php echo $row['category_id'] ?>" <?php echo isset($meta['product_cat']) && $meta['product_cat'] == $row['category_id'] ?  'selected' : '' ?>><?php echo $row['category_name'] ?></option>
                        <?php endwhile; ?>
                        </select>
                      </div>
                    </div>
                    
                    </div>
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Keywords</label>
                        <input type="text" id="tags" name="tags" required class="form-control" value="<?php echo isset($meta['product_keyword']) ? $meta['product_keyword'] : '' ?>">
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Save Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div></p>
      <?php
include("footer1.php");



?>
     <script>
       $('.select2').select2({
        placeholder:"Please select Here",
        width:'100%'
       })

       $('#manage-prod').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
          url:'save_prod.php',
          data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', 
            error:err=>console.log(err),
            success:function(resp){
              if(resp == 1){
                  alert("Data successfully saved.");
                  location.replace('index.php?page=productlist')
              }
            }
        })
       })
       function displayImg(input,_this) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                _this.parent().parent().parent().find('.img-field').attr('src', e.target.result);
                  _this.siblings('label').html(input.files[0]['name'])
                  _this.siblings('input[name="fname"]').val('<?php echo strtotime(date('y-m-d H:i:s')) ?>_'+input.files[0]['name'])
                  var p = $('<p></p>')
                  
              }

              reader.readAsDataURL(input.files[0]);
          }
      }
     </script>