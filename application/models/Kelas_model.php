<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing User
	public function listing(){
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->order_by('id_kelas');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}
	
	// Detail User
	public function detail($id_kelas){
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->where('id_kelas',$id_kelas);
		$this->db->order_by('id_kelas');
		$query = $this->db->get();
		return $query->row();
		// row itu utk Single data
	}
	

	// Tambah / insert data
	public function tambah($data){
		$this->db->insert('kelas', $data);
	}

	// Edit atau update user
	public function edit($data){
		$this->db->where('id_kelas',$data['id_kelas']);
		$this->db->update('kelas', $data);

	}

	// Delete user
	public function delete($data){
		$this->db->where('id_kelas',$data['id_kelas']);
		$this->db->delete('kelas', $data);

	}



}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */