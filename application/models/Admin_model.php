<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing User
	public function listing(){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('id_admin');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}
	
	// Detail User
	public function detail($id_admin){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin',$id_admin);
		
		$this->db->order_by('id_admin');
		$query = $this->db->get();
		return $query->row();
		// row itu utk Single data
	}
	
	// Tambah / insert data
	public function tambah($data){
		$this->db->insert('admin', $data);
	}

	// Edit atau update user
	public function edit($data){
		$this->db->where('id_admin',$data['id_admin']);
		$this->db->update('admin', $data);

	}

	// Delete user
	public function delete($data){
		$this->db->where('id_admin',$data['id_admin']);
		$this->db->delete('admin', $data);

	}



}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */