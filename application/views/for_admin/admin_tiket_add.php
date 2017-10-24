<?php $this->load->view('for_admin/header'); ?>
<!-- ================ CONTENT ================ -->
<br>
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                Tambah Tiket
              </h1>
            </div>
            
            <!-- ===================== HERE ===================== -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
              	<form action="<?=site_url('admin/admin_tiket_DoAdd');?>" method="POST" role="form" enctype="multipart/form-data">
                   <div class="form-group">
                      <label for="">Wisata</label>
                      <select name="wisata" id="inputWisata" class="form-control" required="required">
                        <?php foreach ($tampil2  as $key) {
                          ?>
                            <option value="<?=$key->id_wisata?>"> <?=$key->nama?></option>
                        <?php 
                        } ?>
                   </select>
                   </div>  
                  <div class="form-group">
                      <label for="">Status</label>
                      <select name="status" id="inputWisata" class="form-control" required="required">
                        <?php foreach ($tampil as $key) {
                          ?>
                            <option value="<?=$key->id_status_tiket?>"> <?=$key->nama?></option>
                        <?php 
                        } ?>
                   </select>
                   </div>  
                <!--   <div class="form-group">
                      <label for="">Harga</label>
                      <input type="text" name="harga" class="form-control" id="" placeholder="">
                  </div>   -->    
 
                        
                  <button type="submit" class="btn btn-primary">Submit</button>
             </form>
              </div>
            </div>
            <!-- ==================== /HERE ===================== -->            

            <div class="block">
             
            </div>
          </div>
<br>
<!-- ================ END CONTENT ================ -->
<div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="<?php echo site_url('admin') ?>" class="first">
                  Admin 
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/admin_informasi'); ?>">
                  Informasi
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/admin_pemesanan') ?>">
                  Pemesanan
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/admin_transaksi') ?>">
                  Transaksi
                </a>
              </li>
              <li  class="active">
                <a href="<?php echo site_url('admin/admin_tiket') ?>">
                  Tiket
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/admin_user') ?>">
                  User
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/admin_wisata') ?>">
                  Wisata
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('admin/admin_statistik') ?>">
                  Statistik
                </a>
              </li>
             
              <li>
                <a href="<?php echo site_url('login/logout') ?>">
                 Logout
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
<br>

<?php $this->load->view('for_admin/footer'); ?>