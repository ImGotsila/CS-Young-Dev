<?php session_start();?>
<?php 

$table_selected = "tbl_score_inf_stn";

if (!$_SESSION["UserID"]){

	  Header("Location: form_login.php");

}else{
	include('connection.php');    
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php echo $_SESSION["title"];?></title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<!-- Pignose Calender -->
	<link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
	<!-- Chartist -->
	<link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
	<link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- Custom Stylesheet -->
	<link href="css/style.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
        	<div class="loader">
        		<svg class="circular" viewBox="25 25 50 50">
        			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        		</svg>
        	</div>
        </div>
    <!--*******************
        Preloader end
        ********************-->

        
    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">



        <!--**********************************
            Header start
            ***********************************-->
                
			<?php include("layout/header.php");  ?>

        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->
      
        <!--**********************************
            Sidebar start
            ***********************************-->
        
			<?php include("layout/nk-sidebar-menu.html");  ?>
        
        <!--**********************************
            Sidebar end
            ***********************************-->

        <!--**********************************
            Content body start
            ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
					<div class="row">
						<div class="col-7">
							<div class="card">
								<div class="card-body text-center">
									<h1>Store</h1>
									<div class="basic-dropdown">
										<div class="dropdown">
											<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Select Team Name</button>
											<?php 
												$query ="SELECT * FROM $table_selected" or die("Error:" . mysqli_error());
											?>
											<div class="dropdown-menu">
												<?php
												if($result = mysqli_query($con, $query)){
													while($row = mysqli_fetch_array($result)){
												?>
												<li>
													<a class="dropdown-item"><?php echo $row['team']  ?></a> 
												</li>
												<?php } ?>
											<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-5">
							<div class="card">
								<div class="card-body text-center">
									<h1>Alpha Team</h1>
									<h3>Balance 15000 Point</h3>
								</div>
							</div>
						</div>
					</div>
            		<div class="row">
            			<!-- End Row -->
            			<div class="col-12">
                            <div class="row">
							<?php 
								$query ="SELECT * FROM store" or die("Error:" . mysqli_error());
							?>
									<?php
									if($result_pro = mysqli_query($con, $query)){
                                        while($row = mysqli_fetch_array($result_pro)){
										?>
										<div class="col-lg-3">
											<div class="card text-center" >
												<img class="img-fluid" src="images/big/img1.jpg" alt="">
												<div class="card-body" >
													<h5 class="card-title"><?php echo $row['pro_name']  ?></h5>
													<p class="card-text"><?php echo $row['pro_point']  ?></p>  
														<div class="basic-dropdown">
															<div class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Price </button>
																<div class="dropdown-menu">
																	<li>
																	<?php if($row['pro_balance']<10){
																		for ($i=0; $i <$row['pro_balance'] ; $i++) { ?>
																			<a class="dropdown-item"><?php echo $i+1 ?></a> 
																	<?php } ?>	
																	<?php } ?>
					
																	</li>
																</div>
															</div>
														</div>
													<br>    
													<button type="button" class="btn mb-1 btn-rounded btn-success">Add</button>
												</div>
											</div>
										</div>
									<?php } ?>
								<?php } ?>		
            			</div>
				</div>
				</div>

			</div>
			<div class="container-fluid">
                    	<div class="card">
                       		<div class="card-body text-center">
								<div class="container">
									<div class="row">
										<div class="col-md-8">&nbsp;</div>
										<div class="col-md-4">
											<div class="row">
											<h2>Total  550&nbsp; &nbsp;&nbsp; &nbsp;</h2>
											<button class="btn mb-1 btn-rounded btn-success">BUY</button>
										</div>
            						</div>
								</div>
							</div>
						</div>
					</div>
            </div>
        </div>

        <!--**********************************
            Content body end
            ***********************************-->
            
            
        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
            	<div class="copyright">
            		<p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            	</div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="./plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="./plugins/d3v3/index.js"></script>
        <script src="./plugins/topojson/topojson.min.js"></script>
        <script src="./plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="./plugins/raphael/raphael.min.js"></script>
        <script src="./plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="./plugins/moment/moment.min.js"></script>
        <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="./plugins/chartist/js/chartist.min.js"></script>
        <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        <script src="./js/dashboard/dashboard-1.js"></script>

    </body>

	</html>
<?php } ?>