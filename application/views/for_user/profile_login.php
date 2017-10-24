<?php $this->load->view('for_user/header_login'); ?>
<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<img src="<?=base_url()?>upload/original/IMG_1508686141.jpg" class="img-responsive" alt="Image">
						<center><a href=""><span class="glyphicon glyphicon-pencil"></span><h10> Change Picture</h10></a></center>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" >
						<div class="container-fluid">
							<div class="row">
								<h1><b>@amaliasafirar</b>	</h1>
							</div>
						</div>
						<div class="container-fluid">
							<div class="row">
								<table class="table table-hover">
									<tbody>
										<tr>
											<td width="30%">Name</td>
											<td width="70%"><b>Amalia Safira R</b></td>
										</tr>
										<tr>
											<td width="30%">Address</td>
											<td width="70%"><b>Jalan Jembawan 3 4B-47</b></td>
										</tr>
										<tr>
											<td width="30%">Sex</td>
											<td width="70%"><b>Female</b></td>
										</tr>
										<tr>
											<td width="30%">Date of Birth</td>
											<td width="70%"><b>25 January 1998</b></td>
										</tr>
										<tr>
											<td width="30%">Email</td>
											<td width="70%"><b>amaliayuya@gmail.com</b></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="container-fluid">
							<a href=""  data-toggle="modal" data-target="#Modal-1"><span class="glyphicon glyphicon-cog"></span>  Setting</a><br>
							<a href=""><span class="glyphicon glyphicon-pencil"></span>  Change Password</a><br>
							<a href=""><span class="glyphicon glyphicon-file"></span>  History</a>
						</div>
					</div>
				</div>

			</div>
		</div>
<?php $this->load->view('for_user/modal_setting'); ?>
<?php $this->load->view('for_user/footer'); ?>