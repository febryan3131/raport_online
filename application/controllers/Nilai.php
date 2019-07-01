<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Nilai_model');
	}

	// Listing data nilai
	public function index()
	{
		$nilai = $this->Nilai_model->listing();
		

		$data = array(	'title'	 => 'Data Nilai ('.count($nilai).')',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "",
						'menuNilai' => "active",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",

						'nilai'	 => $nilai, 
						'isi'	 => 'nilai/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('nilai/list');
	}

	//Tambah
	public function tambah(){

		

		//Validasi tambah data nilai
		$valid = $this->form_validation;


		$valid->set_rules('siswa_id','Nama Siswa','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'nilai','Nilai','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules('mapel_id','Mapel','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'mapel_id','Semester','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'nilai','Keterangan','required',
					array(	'required'		=>	'%s harus diisi') );
		
		
		if ($valid->run() === FALSE) {
			// End Validasi tambah data nilai



		$data = array('title'	 => 'Tambah nilai',
						'isi'	 => 'nilai/tambah',

						
						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "",
						'menuNilai' => "active",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


	 			);
		$data['mapel'] =  $this->Nilai_model->Mapel();
		$data['siswa'] =  $this->Nilai_model->Siswa();
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('nilai/tambah');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	
							'mapel_id'		=> $i->post('mapel_id'),
							'nilai'			=> $i->post('nilai'),
							'keterangan'	=> $i->post('keterangan'),
							'siswa_id'		=> $i->post('siswa_id')
						);

			$this->Nilai_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('nilai'), 'refresh');

		}
		// End Masuk Database
	}
	// end tambah


	//Edit 
	// $Kode_mapel di lempar ke model 
	public function edit($id_nilai){
		var_dump($this->input->post());die;

		$nilai = $this->Nilai_model->detail($id_nilai);

		//Validasi
		$valid = $this->form_validation;

		// $valid->set_rules('siswa_id','Nama Siswa','required',
		// 			array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'nilai','Nilai','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules('mapel_id','Mapel','required',
					array(	'required' 		=>	'%s harus diisi') );

		// $valid->set_rules(	'mapel_id','Semester','required',
		// 			array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'nilai','Keterangan','required',
					array(	'required'		=>	'%s harus diisi') );

		if ($valid->run() === FALSE) {
			// End Validasi



		$data = array('title'	 => 'Edit nilai : '.$nilai->nama,
						'nilai'	 => $nilai,
						'isi'	 => 'nilai/edit',

						
						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "",
						'menuNilai' => "active",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


	 			);
		$data['mapel'] =  $this->Nilai_model->Mapel();
		$data['siswa'] =  $this->Nilai_model->Siswa();
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('nilai/edit');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	
							'mapel_id'		=> $i->post('mapel_id'),
							'nilai'			=> $i->post('nilai'),
							'keterangan'		=> $i->post('keterangan'),
							// 'siswa_id'			=> $i->post('siswa_id')
						);

			$this->Nilai_model->edit($data, $id_nilai);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('nilai'), 'refresh');

		}
		// End Masuk Database
	}
	// end Edit








	// Delete
	public function delete($id_nilai){
		$nilai = $this->nilai_model->detail($id_nilai);
		$data = array('id_nilai' => $nilai->id_nilai);

		$this->nilai_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('nilai'), 'refresh');
	}
}

/* End of file mapel.php */
/* Location: ./application/controllers/mapel.php */