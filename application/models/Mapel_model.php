<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing User
	public function listing(){
		$this->db->select('*');
		$this->db->from('mapel');
		$this->db->join('guru','guru.id_guru = mapel.guru_id');
		$this->db->order_by('id_mapel');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}
	
	// Detail User
	public function detail($id_mapel){
		$this->db->select('*');
		$this->db->from('mapel');
		$this->db->where('id_mapel',$id_mapel);
		$this->db->order_by('id_mapel');
		$query = $this->db->get();
		return $query->row();
		// row itu utk Single data
	}
	

	// Tambah / insert data
	public function tambah($data){
		$this->db->insert('mapel', $data);
	}

	// Edit atau update user
	public function edit($data, $id){
		// $this->db->where('id_mapel',$data['id_mapel']);
		// $this->db->update('mapel', $data);
        $this->db->update('mapel', $data, array('id_mapel' => $id));

	}

	// Delete user
	public function delete($data){
		$this->db->where('id_mapel',$data['id_mapel']);
		$this->db->delete('mapel', $data);

	}

	public function guru(){
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->order_by('id_guru');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}



}

/* End of file Mapel_model.php */
/* Location: ./application/models/Mapel_model.php */