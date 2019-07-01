<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_model');
	}

	// Listing data kelas
	public function index()
	{
		$kelas = $this->Kelas_model->listing();
		$data = array(	'title'	 => 'Data Kelas ('.count($kelas).')',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "active",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",

						'kelas'	 => $kelas, 
						'isi'	 => 'kelas/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('kelas/list');
	}

	//Tambah
	public function tambah(){

		//Validasi tambah data kelas
		$valid = $this->form_validation;

		$valid->set_rules('kelas','Kelas','required',
					array(	'required' 		=>	'%s harus diisi') );
		
		if ($valid->run() === FALSE) {
			// End Validasi tambah data kelas



		$data = array('title'	 => 'Tambah kelas',
						'isi'	 => 'kelas/tambah',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "active",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('kelas/tambah');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'id_kelas'	=> $i->post('id_kelas'),
							'kelas'		=> $i->post('kelas'),
							
						);

			$this->Kelas_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('kelas'), 'refresh');

		}
		// End Masuk Database
	}
	// end tambah


	//Edit 
	// $id_kelas di lempar ke model 
	public function edit($id_kelas){

		$kelas = $this->Kelas_model->detail($id_kelas);
 
		//Validasi
		$valid = $this->form_validation;

		$valid->set_rules('id_kelas','ID Kelas','required',
					array('required' =>	'%s harus diisi') );

		$valid->set_rules('kelas','Kelas','required',
					array(	'required' 		=>	'%s harus diisi') );

	
		if ($valid->run() === FALSE) {
			// End Validasi



		$data = array('title'	 => 'Edit kelas : '.$kelas->id_kelas,
						'kelas'	 => $kelas,
						'isi'	 => 'kelas/edit',  

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "active",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('kelas/edit');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'id_kelas'			=> $i->post('id_kelas'),
							'kelas'			=> $i->post('kelas'),
														
						);

			$this->Kelas_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('kelas'), 'refresh');

		}
		// End Masuk Database
	}
	// end Edit


	// Delete
	public function delete($id_kelas){
		$kelas = $this->Kelas_model->detail($id_kelas);
		$data = array('id_kelas' => $kelas->id_kelas);

		$this->Kelas_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('kelas'), 'refresh');
	}
}

/* End of file kelas.php */
/* Location: ./application/controllers/kelas.php */