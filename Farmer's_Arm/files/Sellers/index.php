<!doctype html>
<html lang="en">


 <?php include 'header.php' ?>
  

    <?php
include("../db.php");


?>
<body class="n">
<?php 



?>
      <main id="view-panel">
        <div class="container-fluid">
		
            <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'productlist';
            include $page.'.php' ?>
          
        </div>
    </main>

  </body>

<script type="text/javascript">
  
  window.start_load = function(){
    $('body').append('<div id="preloader2"></div>');
  }
  window.end_load = function(){
    $('body #preloader2').remove();
  }
</script>