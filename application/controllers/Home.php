<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		
	}

	// Listing data guru
	public function index()
	{
	$data = array(	

						'menuDasbor' => "",
						'menuHome' => "active",
						'menuGuru' => "",
						'menuSiswa' => "",
						'menuAdmin' => "",
						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",
						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


					
						'isi'	 => 'admin/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('home/list');
	}

	//Tambah


}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */