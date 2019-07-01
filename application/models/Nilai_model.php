<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing User
	public function listing(){
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->join('mapel','mapel.id_mapel = nilai.mapel_id');
		$this->db->join('siswa','siswa.id_siswa = nilai.siswa_id');
		$this->db->order_by('id_nilai');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}
	
	// Detail User
	public function detail($id_nilai){
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->join('mapel','mapel.id_mapel = nilai.mapel_id');
		$this->db->join('siswa','siswa.id_siswa = nilai.siswa_id');
		$this->db->where('nilai.id_nilai',$id_nilai);
		$this->db->order_by('id_nilai');
		$query = $this->db->get();
		return $query->row();
		// row itu utk Single data
	}
	

	// Tambah / insert data
	public function tambah($data){
		$this->db->insert('nilai', $data);
	}

	// Edit atau update user
	public function edit($data, $id_nilai){
		// $this->db->where('id_nilai',$data['id_nilai']);
		// $this->db->update('nilai', $data);
		 $this->db->update('nilai', $data, array('id_nilai' => $id_nilai));

	}

	// Delete user
	public function delete($data){
		$this->db->where('id_nilai',$data['id_nilai']);
		$this->db->delete('nilai', $data);


// tambah function baru//////////////////////////////
	}
	public function mapel(){
		$this->db->select('*');
		$this->db->from('mapel');
		$this->db->order_by('id_mapel');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}

	public function siswa(){
		$this->db->select('*');
		$this->db->from('siswa');
		//$this->db->join('nilai','nilai.siswa_id = siswa.id_siswa');
		$this->db->order_by('id_siswa');
		$query = $this->db->get();
		return $query->result();
		// result itu utk menampilkan semua data
	}


}

/* End of file Nilai_model.php */
/* Location: ./application/models/Nilai_model.php */