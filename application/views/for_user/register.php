<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cs-select.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
		<body>


		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?=base_url()?>assets/images/black.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row" ">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								
							</div>
							<div class="col-sm-8 col-md-8">
									
								
									
								
								<div class="tabulation animate-box">
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
								<form action="<?=site_url('login/doRegister');?>" method="POST" role="form">

										<div class="row"">
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label>Nama Depan</label>
													<input type="text" name="nama_depan" class="form-control" placeholder=""/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label>Nama Belakang</label>
													<input type="text" name="nama_belakang" class="form-control" placeholder=""/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label>Alamat</label>
													<input type="text" name="alamat" class="form-control" placeholder=""/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Tanggal:</label>
													<input type="text" class="form-control" name="tanggal" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Jenis Kelamin:</label>
													<select class="cs-select cs-skin-border" name="jenis_kelamin">
														<option value="" disabled selected>Plih</option>
														<option value="Laki-Laki">Laki-Laki</option>
														<option value="Perempuan">Perempuan</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label>Email</label>
													<input type="email" name="email" class="form-control" placeholder=""/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label>Username</label>
													<input type="text" name="username" class="form-control" placeholder=""/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label>Password</label>
													<input type="password" name="password" class="form-control" placeholder=""/>
												</div>
											</div>

											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary" value="Register">
												<a href="<?=site_url('login');?>"><button type="button" class="btn btn-warning" style="border: none">Cancel</button></a>
											</div>
										</div>
										</form>
									 </div>
									<div>

									</div>
									</div>

								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

		</div>
								  <!-- Nav tabs -->


								   
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?=base_url()?>assets/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?=base_url()?>assets/js/hoverIntent.js"></script>
	<script src="<?=base_url()?>assets/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?=base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?=base_url()?>assets/js/classie.js"></script>
	<script src="<?=base_url()?>assets/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="<?=base_url()?>assets/js/main.js"></script>

	</body>
</html>

