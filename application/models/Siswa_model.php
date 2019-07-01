<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing User
	public function listing(){
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('kelas','kelas.id_kelas = siswa.kelas_id');
		$this->db->order_by('id_siswa');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}
	
	// Detail User
	public function detail($id_siswa){
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_siswa',$id_siswa);
		$this->db->order_by('id_siswa');
		$query = $this->db->get();
		return $query->row();
		// row itu utk Single data
	}
	

	// Tambah / insert data
	public function tambah($data){
		$this->db->insert('siswa', $data);
	}

	// Edit atau update user
	public function edit($data, $id){
		$this->db->update('siswa', $data, array('id_siswa' => $id));

	}

	// Delete user
	public function delete($data){
		$this->db->where('id_siswa',$data['id_siswa']);
		$this->db->delete('siswa', $data);

	}

	public function kelas(){
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->order_by('id_kelas');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}



}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */