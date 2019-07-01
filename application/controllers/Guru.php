<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model');
	}

	// Listing data guru
	public function index()
	{
		$guru = $this->guru_model->listing();
		

		$data = array(	'title'	 => 'Data guru ('.count($guru).')',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "active",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


						'guru'	 => $guru, 
						'isi'	 => 'guru/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('guru/list');
	}

	//Tambah
	public function tambah(){

		//Validasi tambah data guru
		$valid = $this->form_validation;

		$valid->set_rules('nip','Nip','required',
					array('required' =>	'%s harus diisi') );

		$valid->set_rules('nama','Nama Guru','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'alamat','Alamat','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'jenis_kelamin','jenis Kelamin','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'agama','Agama','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'username','Username','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'password','Password','required',
					array(	'required'		=>	'%s harus diisi') );

	
		
		if ($valid->run() === FALSE) {
			// End Validasi tambah data guru



		$data = array('title'	 => 'Tambah guru',
						'isi'	 => 'guru/tambah',

						
						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "active",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('guru/tambah');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'nip' 			=> $i->post('nip'),
							'nama'			=> $i->post('nama'),
							'alamat'		=> $i->post('alamat'),
							'jenis_kelamin'	=> $i->post('jenis_kelamin'),
							'agama'	=> $i->post('agama'),
							'username'	=> $i->post('username'),
							'password'	=> $i->post('password'),							
			);

			$this->guru_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('guru'), 'refresh');

		}
		// End Masuk Database
	}
	// end tambah


	//Edit 
	// $id_guru di lempar ke model 
	public function edit($id_guru){

		$guru = $this->guru_model->detail($id_guru);

		//Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nip','Nip','required',
				array('required' =>	'%s harus diisi') );

		$valid->set_rules('nama','Nama Guru','required',
				array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'alamat','Alamat','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'jenis_kelamin','jenis Kelamin','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'agama','Agama','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'username','Username','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'password','Password','required',
					array(	'required'		=>	'%s harus diisi') );

		if ($valid->run() === FALSE) {
			// End Validasi



		$data = array('title'	 => 'Edit guru : '.$guru->nama,
						'guru'	 => $guru,
						'isi'	 => 'guru/edit',

						
						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "active",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('guru/edit');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'id_guru' 			=> $id_guru,
							'nip' 			=> $i->post('nip'),
							'nama'			=> $i->post('nama'),
							'alamat'		=> $i->post('alamat'),
							'jenis_kelamin'	=> $i->post('jenis_kelamin'),
							'agama'	=> $i->post('agama'),
							'username'	=> $i->post('username'),
							'password'	=> $i->post('password'),
			);

			$this->guru_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('guru'), 'refresh');

		}
		// End Masuk Database
	}
	// end Edit


	// Delete
	public function delete($id_guru){
		$guru = $this->guru_model->detail($id_guru);
		$data = array('id_guru' => $guru->id_guru);

		$this->guru_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('guru'), 'refresh');
	}
}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */