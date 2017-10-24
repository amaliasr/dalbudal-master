<?php $this->load->view('for_user/header_login'); ?>
<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<form action="<?=site_url('admin/admin_informasi_DoAdd');?>" method="POST" role="form" enctype="multipart/form-data">
                  
		                  
		                  <div class="form-group">
		                      <label for="">Bukti Pembayaran</label>
		                      <input type="file" name="gambar" size="100"/>

		                  </div>  
		                  <button type="submit" class="btn btn-primary">Send</button>
		             </form>
					</div>
				</div>

			</div>
		</div>
<?php $this->load->view('for_user/footer'); ?>