<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	// Listing data siswa
	public function index()
	{
		$siswa = $this->Siswa_model->listing();
		
		$data = array(	'title'	 => 'Data Siswa ('.count($siswa).')',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "active",

						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",

						'siswa'	 => $siswa,
						
						'isi'	 => 'siswa/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('siswa/list');
	}

	//Tambah
	public function tambah(){

		$kelas =  $this->Siswa_model->kelas();

		//Validasi tambah data siswa
		$valid = $this->form_validation;

		$valid->set_rules('nis','Nis','required',
					array('required' =>	'%s harus diisi') );

		$valid->set_rules('nama','Nama Siswa','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules('kelas_id','Kelas','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'ttl','Tempat Tanggal Lahir','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'alamat','Alamat','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'agama','Agama','required',
					array(	'required'		=>	'%s harus diisi') );

		
		
		if ($valid->run() === FALSE) {
			// End Validasi tambah data siswa



		$data = array('title'	 => 'Tambah siswa',
						'isi'	 => 'siswa/tambah',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "active",

						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",

						'kelas' => $kelas,

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('siswa/tambah');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'nis' 			=> $i->post('nis'),
							'nama'	=> $i->post('nama'),
							'alamat'		=> $i->post('alamat'),
							'agama'	=> $i->post('agama'),							
							'ttl'	=> $i->post('ttl'),
							'kelas_id'	=> $i->post('kelas_id'),
							
			);

			$this->Siswa_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('siswa'), 'refresh');

		}
		// End Masuk Database
	}
	// end tambah


	//Edit 
	// $id_siswa di lempar ke model 
	public function edit($id_siswa){
		// var_dump($this->input->post());
		// die;

		$siswa = $this->Siswa_model->detail($id_siswa);
		$kelas =  $this->Siswa_model->kelas();

		//Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nis','Nis','required',
					array('required' =>	'%s harus diisi') );

		$valid->set_rules('nama','Nama Siswa','required',
					array(	'required' 		=>	'%s harus diisi') );

		 $valid->set_rules('kelas_id','Kelas','required',
		 			array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'ttl','Tempat Tanggal Lahir','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'alamat','Alamat','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'agama','Agama','required',
					array(	'required'		=>	'%s harus diisi') );

		if ($valid->run() === FALSE) {
			// End Validasi



		$data = array('title'	 => 'Edit Siswa : '.$siswa->nama,
						'siswa'	 => $siswa,
						'isi'	 => 'siswa/edit',
						'kelas' => $kelas,

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "active",

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
		$this->load->view('siswa/edit');
		// Masuk database
		}
		else{
			$i = $this->input->post();
			$data = array(
							'nis' 		=> $i['nis'],
							'nama'		=> $i['nama'],
							'alamat'	=> $i['alamat'],
							'agama'		=> $i['agama'],							
							'ttl'		=> $i['ttl'],
							'kelas_id'	=> $i['kelas_id']
			);

			$this->Siswa_model->edit($data, $id_siswa);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('siswa'), 'refresh');

		}
		// End Masuk Database
	}
	// end Edit


	// Delete
	public function delete($id_siswa){
		$siswa = $this->Siswa_model->detail($id_siswa);
		$data = array('id_siswa' => $siswa->id_siswa);

		$this->Siswa_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('siswa'), 'refresh');
	}
}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */