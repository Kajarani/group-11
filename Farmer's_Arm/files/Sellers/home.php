<div class="col-lg-12">
	<div class="row">
		
      	
      	<div class="ml-4 card card-stats col-md-3 bg-info">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Categories</h5>
                  <span class="h2 font-weight-bold mb-0 text-white float-right"><?php echo mysqli_num_rows(mysqli_query($con,"select * from category")) ?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
             <span class='stat-icons'><i class="fa fa-list"></i></span>
            </div>
      	</div>
	</div>
</div>