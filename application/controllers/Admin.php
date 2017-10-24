<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
			parent::__construct();
			if (!$this->session->userdata('logged_in')=="LogIn") {
				redirect('adminlogin','refresh');
			}
	}
	public function index(){
		$data['tampil'] = $this->m_global->tampil('admin','id_admin');
		$this->load->view('for_admin/admin',$data);		
	}
	public function admin_add(){
		$this->load->view('for_admin/admin_add');
	}
	public function admin_DoAdd(){
		$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->tambah('admin',$data);
			redirect('admin','refresh');
	}
	public function admin_edit($id){
		$data['tampil'] = $this->m_global->tampil_id($id,'admin','id_admin');
		$this->load->view('for_admin/admin_edit',$data);
	}
	public function admin_DoEdit($id){
			$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->edit($id,'admin',$data,'id_admin');
			redirect('admin','refresh');
		}
	public function admin_delete($id){
		$this->m_global->hapus($id,'admin','id_admin');
		redirect('admin','refresh');
	}
	public function admin_informasi(){
		$data['tampil'] = $this->m_global->tampil_info();
		$this->load->view('for_admin/admin_informasi',$data);
	}
	public function admin_informasi_add(){
		$data['tampil'] = $this->m_global->tampil('wisata','id_wisata');
		$this->load->view('for_admin/admin_informasi_add',$data);
	}
	public function admin_informasi_DoAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();
	            $data['id_wisata'] 		= $this->input->post("wisata");
	            $data['content'] 		= $this->input->post("informasi");
		 		$data['gambar'] 		= $image_data['file_name'];

	            $this->m_global->tambah('informasi',$data);

	            $config['source_image'] 	= $image_data['full_path'];
	            $config['new_image']      	= './upload/sedang';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/admin_informasi','refresh');
			}
	}
	public function admin_informasi_edit($id,$id_wisata){
		$data['tampil'] = $this->m_global->tampil_info_id($id);
		$data['tampilwisata'] = $this->m_global->tampil_wisata_no_id($id_wisata);
		$this->load->view('for_admin/admin_informasi_edit', $data);
	}
	public function admin_informasi_DoEdit($id){
		$foto						= "IMG_".time();
		$path						= './upload/original/';
		$config['upload_path']		= $path;
        $config['allowed_types']	= 'jpg|jpeg|png';
        $config['max_size']			= '1024';
        $config['file_name']		= $foto;

        $this->load->library('upload', $config);
        $image_data	= $this->upload->data();

        if (! $this->upload->do_upload('gambar')){ // name="upload"
			echo $this->upload->display_errors();
	 	}
	 	else{
            $image_data = $this->upload->data();

            $file_lama				= $this->input->post('file_lama');
            $data['id_wisata'] 		= $this->input->post("wisata");
			$data['content'] 		= $this->input->post("informasi");
	 		$data['gambar']			= $image_data['file_name'];
	 		$path1					= './upload/sedang/';

	 		unlink($path.$file_lama);
	 		unlink($path1.$file_lama);

            $this->m_global->edit($id,'informasi',$data,'id_informasi');

            $config['source_image']		= $image_data['full_path'];
            $config['new_image']		= './upload/sedang';
            $config['maintain_ratio']	= true;
            $config['width']			= 100;
            $config['height']			= 180;

            // kemudian panggil fungsi initialize() sebelum fungsi resize()
            // kalau tidak, hanya akan menghasilkan 1 file saja
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            redirect('admin/admin_informasi','refresh');
		}
	}
	public function admin_informasi_delete($id,$file_lama){
		$this->m_global->hapus($id,'informasi','id_informasi');	
		$path1					= './upload/sedang/';
		$path					= './upload/original/';

		
		unlink($path.$file_lama);
	 	unlink($path1.$file_lama);

		redirect('admin/admin_informasi','refresh');
	}
	public function admin_pemesanan(){
		$data['tampil'] = $this->m_global->tampil('pemesanan', 'id_pemesanan');
		$this->load->view('for_admin/admin_pemesanan',$data);
	}
	public function admin_pemesanan_delete($id){
		$this->m_global->hapus($id,'pemesanan','id_pemesanan');
		redirect('admin/admin_pemesanan','refresh');
	}
	public function admin_statistik(){

		$this->load->view('for_admin/admin_statistik');
	}
	public function admin_tiket(){
		$data['tampil'] = $this->m_global->tampil_tiket();
		$this->load->view('for_admin/admin_tiket',$data);
	}
	public function admin_tiket_add(){
		$data['tampil'] = $this->m_global->tampil('status_tiket','id_status_tiket');
		$data['tampil2'] = $this->m_global->tampil('wisata','id_wisata');
		$this->load->view('for_admin/admin_tiket_add',$data);
	}
	public function admin_tiket_DoAdd(){

		$wisata = $this->input->post('wisata');
		$status = $this->input->post('status');

		$data = array(
			'id_wisata' => $this->input->post('wisata'),
			'id_status_tiket' => $this->input->post('status'),
			'kode_unik' => $wisata.$status.time()
		);
		$this->m_global->tambah('tiket',$data);

		redirect('admin/admin_tiket','refresh');
	}
	public function admin_tiket_edit($id){
		$data['tampil'] = $this->m_global->tampil('status_tiket','id_status_tiket');
		$data['tampil2'] = $this->m_global->tampil('wisata','id_wisata');
		$data['tampil3'] = $this->m_global->tampil_id($id,'tiket','id_tiket');
		$this->load->view('for_admin/admin_tiket_edit',$data);
	}
	public function admin_tiket_DoEdit($id){
		$data = array(
			'id_wisata' => $this->input->post('wisata'),
			'id_status_tiket' => $this->input->post('status'),
			'kode_unik' => $this->input->post('kode')
		);
		$this->m_global->edit($id,'tiket',$data,'id_tiket');
			redirect('admin/admin_tiket','refresh');
	}
	public function admin_tiket_delete($id){
		$this->m_global->hapus($id,'tiket','id_tiket');
		redirect('admin/admin_tiket','refresh');
	}
	public function admin_transaksi(){
		$data['tampil'] = $this->m_global->tampil('transaksi','id_transaksi');
		$this->load->view('for_admin/admin_transaksi',$data);
	}
	public function admin_transaksi_delete(){
		$this->m_global->hapus($id,'transaksi','id_transaksi');
		redirect('admin/admin_transaksi','refresh');
	}
	public function admin_user(){
		$data['tampil'] = $this->m_global->tampil('user','id_user');
		$this->load->view('for_admin/admin_user',$data);
	}
	public function admin_user_delete($id){
		$this->m_global->hapus($id,'user','user_id');
		redirect('admin/admin_user','refresh');
	}



	public function admin_wisata(){
		$data['tampil'] = $this->m_global->tampil('wisata','id_wisata');
		$this->load->view('for_admin/admin_wisata',$data);
	}
	public function admin_wisata_add(){
		$this->load->view('for_admin/admin_wisata_add');
	}
	public function admin_wisata_DoAdd(){

		$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();
	            $data = array(
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'harga' => $this->input->post('harga'),
					);
		 		$data['gambar'] 		= $image_data['file_name'];

	            $this->m_global->tambah('wisata',$data);

	            $config['source_image'] 	= $image_data['full_path'];
	            $config['new_image']      	= './upload/sedang';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

			}
		 redirect('admin/admin_wisata','refresh');
	}
	public function admin_wisata_edit($id){
		$data['tampil'] = $this->m_global->tampil('wisata','id_wisata');
		$this->load->view('for_admin/admin_wisata_edit',$data);
	}
	public function admin_wisata_DoEdit($id){

		$foto						= "IMG_".time();
		$path						= './upload/original/';
		$config['upload_path']		= $path;
        $config['allowed_types']	= 'jpg|jpeg|png';
        $config['max_size']			= '1024';
        $config['file_name']		= $foto;

        $this->load->library('upload', $config);
        $image_data	= $this->upload->data();

        if (! $this->upload->do_upload('gambar')){ // name="upload"
			echo $this->upload->display_errors();
	 	}
	 	else{
            $image_data = $this->upload->data();

            $file_lama				= $this->input->post('file_lama');
            $data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'harga' => $this->input->post('harga')
			 );
            $data['gambar']			= $image_data['file_name'];
	 		$path1					= './upload/sedang/';

	 		unlink($path.$file_lama);
	 		unlink($path1.$file_lama);

            $this->m_global->edit($id,'wisata',$data,'id_wisata');

            $config['source_image']		= $image_data['full_path'];
            $config['new_image']		= './upload/sedang';
            $config['maintain_ratio']	= true;
            $config['width']			= 100;
            $config['height']			= 180;

            // kemudian panggil fungsi initialize() sebelum fungsi resize()
            // kalau tidak, hanya akan menghasilkan 1 file saja
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            redirect('admin/admin_wisata','refresh');
		}


		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'harga' => $this->input->post('harga')
			 );
		$this->m_global->edit($id,'wisata',$data,'id_wisata');
		redirect('admin/admin_wisata','refresh');
	}
	public function admin_wisata_delete($id){
		$this->m_global->hapus($id,'wisata','id_wisata');
		redirect('admin/admin_wisata','refresh');
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */