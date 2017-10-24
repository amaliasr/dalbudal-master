<?php $this->load->view('for_user/header_login'); ?>
<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th width="15%">Date</th>
									<th>Content</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>12-11-2017</td>
									<td>You have to order tickets, and you must pay before 24 hour. Please click a button for link to payment. Screencapture your payment and send</td>
									<td><a href="<?php echo site_url('home/payment')?>"><button type="button" class="btn btn-default">Pay</button></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
<?php $this->load->view('for_user/footer'); ?>