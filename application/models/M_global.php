<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_global extends CI_Model {

	public function tampil($tabel,$primary_key){
		$this->db->from($tabel);
		$this->db->order_by($primary_key, 'ASC');
		$query = $this->db->get(); 
		return $query->result();
	}	

	public function tampil_id($id,$tabel,$primary_key){
		$this->db->where($primary_key, $id);
		return $this->db->get($tabel)->result();
	}

	public function tambah($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	public function edit($id,$tabel,$data,$primary_key){
		$this->db->where($primary_key,$id);
		$this->db->update($tabel,$data);
	
	}

	public function hapus($id,$tabel,$primary_key){
		$this->db->where($primary_key, $id);
		$this->db->delete($tabel);
	}

	public function tampil_file($tabel,$primary_key,$id){
		$this->db->where($primary_key, $id);
		$query = $this->db->get($tabel);
		if ($query->num_rows()==1) {
			return $query->row();
		}
	}

	public function login($username, $password){
		$data = array(
				'username' => $username,
				'password' => $password
			);
		
		$this->db->where($data);
		return $this->db->get('user');
	}

	public function tampil_sosmed($id){
		$query = $this->db->query("	SELECT * FROM anggota,icon_sosmed,sosmed_anggota
									WHERE sosmed_anggota.id_anggota = anggota.id_anggota
									AND sosmed_anggota.id_icon = icon_sosmed.id_icon
									AND sosmed_anggota.id_anggota = '".$id."' ");

		return $query->result();

	}
	public function tampil_sosmed_user($id){
		$query = $this->db->query("	SELECT * FROM anggota,icon_sosmed,sosmed_anggota
									WHERE sosmed_anggota.id_anggota = anggota.id_anggota
									AND sosmed_anggota.id_icon = icon_sosmed.id_icon
									AND sosmed_anggota.id_anggota = '".$id."'");

		return $query->result();

	}
	public function read_more($id){
		$this->db->where('id_blog', $id);
		return $this->db->get('blog')->result();
	}

		public function tampil_info(){
		$this->db->select('
			informasi.id_informasi as id_informasi ,
			wisata.id_wisata as id_wisata,
			informasi.content as content,
			informasi.gambar as gambar,
			wisata.nama as nama,
			wisata.alamat as alamat,
			wisata.harga');

		$this->db->join('wisata', 'informasi.id_wisata = wisata.id_wisata', 'inner');
		$query = $this->db->get('informasi');
		return $query->result(); 
	}
	public function tampil_info_id($id){
		$this->db->select('
			informasi.id_informasi as id_informasi ,
			wisata.id_wisata as id_wisata,
			informasi.content as content,
			informasi.gambar as gambar,
			wisata.nama as nama,
			wisata.alamat as alamat,
			wisata.harga');
		$this->db->where('informasi.id_informasi', $id);
		$this->db->join('wisata', 'informasi.id_wisata = wisata.id_wisata', 'inner');
		$query = $this->db->get('informasi');
		return $query->result(); 
	}

	public function tampil_tiket(){
		$this->db->select('
			tiket.id_tiket,
			tiket.id_status_tiket,
			tiket.id_wisata,
			tiket.kode_unik,
			wisata.nama as nama_wisata,
			wisata.alamat,
			wisata.harga,
			status_tiket.nama as status_tiket');
		$this->db->join('wisata', 'tiket.id_wisata = wisata.id_wisata', 'inner');;
		$this->db->join('status_tiket', 'tiket.id_status_tiket = status_tiket.id_status_tiket', 'left');
		$query = $this->db->get('tiket');
		return $query->result();
	}

	public function tampil_wisata(){
		$this->db->select('
			wisata.id_wisata,
			wisata.nama as nama_wisata,
			wisata.alamat,
			wisata.harga,
			informasi.content,
			informasi.gambar');
		$this->db->join('informasi', 'wisata.id_wisata = informasi.id_wisata', 'inner');
		$query = $this->db->get('wisata');
		return $query->result();
	}
	public function tampil_wisata_id($id){
		$this->db->select('
			wisata.id_wisata,
			wisata.nama as nama_wisata,
			wisata.alamat,
			wisata.harga,
			wisata.gambar,
			informasi.content,
			informasi.gambar');
		$this->db->where('wisata.id_wisata', $id);
		$this->db->join('informasi', 'wisata.id_wisata = informasi.id_wisata', 'inner');
		$query = $this->db->get('wisata');
		return $query->result();
	}
	public function tampil_wisata_no_id($id){
		$query =$this->db->query("SELECT nama, id_wisata FROM wisata WHERE id_wisata !=	 '".$id."' ORDER BY id_wisata ASC");
		return $query->result();
	}
}

/* End of file M_berita.php */
/* Location: ./application/models/M_berita.php */