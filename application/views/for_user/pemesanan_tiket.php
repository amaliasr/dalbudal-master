<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">

	<title>Pemesanan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>step_assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?=base_url()?>step_assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?=base_url()?>step_assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>step_assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('<?=base_url()?>assets/images/black.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Pemesanan
		                        	</h3>
									
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Tiket</a></li>
			                            <li><a href="#account" data-toggle="tab">Identitas</a></li>
			                            <li><a href="#address" data-toggle="tab">Transaksi</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<h4 class="info-text"> Tiket anda </h4>
		                              <div class="row">
		                                	
		                                	<div class="col-sm-6 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														
													</span>
													<div class="form-group label-floating">
		                                            <label class="control-label">Country</label>
	                                            	<select name="country" class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
	                                            	</select>
		                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														
													</span>
													<div class="form-group label-floating">
													  
													  <input name="lastname" type="date" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-6 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														
													</span>
													<div class="form-group label-floating">
		                                            <label class="control-label">Country</label>
	                                            	<select name="country" class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
	                                            	</select>
		                                        </div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>




		                            <div class="tab-pane" id="account">
		                                <h4 class="info-text"> Periksa kembali identitas anda </h4>
		                                <div class="row">
		                                    <div class="col-sm-6 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														
													</span>
													<div class="form-group label-floating">
		                                            <label class="control-label">Nama <small>(required)</small></label>
			                                          <input name="firstname" type="text" class="form-control">
		                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														
													</span>
													<div class="form-group label-floating">
													  
													<label class="control-label">Alamat <small>(required)</small></label>
			                                        <input name="firstname" type="text" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-6 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														
													</span>
													<div class="form-group label-floating">
		                                            <label class="control-label">Email <small>(required)</small></label>
			                                        <input name="firstname" type="text" class="form-control">
		                                        </div>
												</div>
											</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> Total Pembelian Tiket </h4>
		                                    </div>
		                                    
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="<?=base_url()?>step_assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>step_assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>step_assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?=base_url()?>step_assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?=base_url()?>step_assets/js/jquery.validate.min.js"></script>

</html>
