<?php $this->load->view('for_admin/header'); ?>
<br>
 <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                Tiket
              </h1>
            </div>
            
            <!-- ===================== HERE ===================== -->
                <a href="<?=site_url('admin/admin_tiket_add');?>"><span class="glyphicon glyphicon-plus"></span></a>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Wisata</th>
                          <th>Status Tiket</th>
                          <th>Kode</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $a=1; foreach ($tampil as $key) {
                          ?>
                        <tr>
                          <td><?php echo $a++ ?> </td>
                          <td><?php echo $key->nama_wisata?></td>
                          <td><?php echo $key->status_tiket ?></td>
                          <td><?php echo $key->kode_unik ?></td>
                          <td>
                              <a href="<?=site_url('admin/admin_tiket_edit/').$key->id_tiket;?>"><span class="glyphicon glyphicon-edit"></span></a>
                              <a href="<?=site_url('admin/admin_tiket_delete/').$key->id_tiket;?>"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>
                        </tr>
                          <?php
                        } ?>
                        
                     
                      </tbody>
                  </table>
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