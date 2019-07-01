<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guru_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing User
	public function listing(){
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->order_by('id_guru');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}
	
	// Detail User
	public function detail($id_guru){
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('id_guru',$id_guru);
		
		$this->db->order_by('id_guru');
		$query = $this->db->get();
		return $query->row();
		// row itu utk Single data
	}
	
	// Tambah / insert data
	public function tambah($data){
		$this->db->insert('guru', $data);
	}

	// Edit atau update user
	public function edit($data){
		$this->db->where('id_guru',$data['id_guru']);
		$this->db->update('guru', $data);

	}

	// Delete user
	public function delete($data){
		$this->db->where('id_guru',$data['id_guru']);
		$this->db->delete('guru', $data);

	}



}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */