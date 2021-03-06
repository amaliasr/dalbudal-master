<?php $this->load->view('for_admin/header'); ?>
<br>
 <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                User
              </h1>
            </div>
            
            <!-- ===================== HERE ===================== -->
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $a=1;
                        foreach ($tampil as $key) {
                        ?>
                        <tr>
                          <td><?=$a++?></td>
                          <td><?=$key->nama?></td>
                          <td><?=$key->alamat?></td>
                          <td><?=$key->tanggal_lahir?></td>
                          <td><?=$key->jenis_kelamin?></td>
                          <td><?=$key->email?></td>
                          <td><?=$key->username?></td>
                          <td><?=$key->password?></td>                       
                          <td>
                            <a href="<?=site_url('admin/admin_user/').$key->id_user?>"><span class="glyphicon glyphicon-trash"></span></a>
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
              <li>
                <a href="<?php echo site_url('admin/admin_tiket') ?>">
                  Tiket
                </a>
              </li>
              <li  class="active">
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