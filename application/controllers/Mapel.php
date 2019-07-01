<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mapel_model');
	}

	// Listing data mapel
	public function index()
	{
		$mapel = $this->Mapel_model->listing();


		$data = array(	'title'	 => 'Data Mapel ('.count($mapel).')',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "active",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",

						'mapel'	 => $mapel, 

						'isi'	 => 'mapel/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('mapel/list');
	}

	//Tambah
	public function tambah(){

		 //Validasi tambah data mapel
		
		// var_dump($data['guru']); exit();
		$valid = $this->form_validation;

		$valid->set_rules('kode_mapel','Id Mapel','required',
					array('required' =>	'%s harus diisi') );

		$valid->set_rules('nama_mapel','Nama mapel','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules('keterangan','Keterangan','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules('guru_id','Nama guru','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules('semester','Semester','required',
					array(	'required'		=>	'%s harus diisi') );

		
		
		if ($valid->run() === FALSE) {
			// End Validasi tambah data mapel
		$kode_mapel = $this->input->post('kode_mapel');

		$data = array('title'	 => 'Tambah mapel',
						'isi'	 => 'mapel/tambah',
						

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "active",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",
	 			);

		$data['guru']= $this->Mapel_model->guru();
		$this->load->view('top',$data);
		$this->load->view('navigator', $data);
		$this->load->view('mapel/tambah',$data);
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'kode_mapel'			=> $i->post('kode_mapel'),
							'nama_mapel'			=> $i->post('nama_mapel'),
							'keterangan'		=> $i->post('keterangan'),
							'semester'		=> $i->post('semester'),
							'guru_id'		=> $i->post('guru_id'),
						);
			
			$this->Mapel_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('mapel'), 'refresh');

		}
		// End Masuk Database
	}
	// end tambah


	//Edit 
	// $Kode_mapel di lempar ke model 
	public function edit($id_mapel){
		// var_dump($this->input->post());
		// die;	
		$mapel = $this->Mapel_model->detail($id_mapel);
		//Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_mapel','Nama mapel','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules('keterangan','Keterangan','required',
					array(	'required'		=>	'%s harus diisi') );


		$valid->set_rules('semester','Semester','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules('guru_id','Nama guru','required',
					array(	'required' 		=>	'%s harus diisi') );

		if ($valid->run() === FALSE) {
			// End Validasi



		$data = array('title'	 => 'Edit mapel : '.$mapel->nama_mapel,
						'mapel'	 => $mapel,
						'isi'	 => 'mapel/edit',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuAdmin' => "",
						'menuSiswa' => "",

						'menuAkademik' => "active",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "active",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",
	 			);
		$data['guru'] = $this->Mapel_model->guru(); //manggilnya di bawah

		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('mapel/edit', $data);
		// Masuk database
		}

		else{
			$i = $this->input->post();
			$data = array(//	'kode_mapel'	=> $i['kode_mapel'],
							'nama_mapel'	=> $i['nama_mapel'],
							'keterangan'	=> $i['keterangan'],
							'semester'		=> $i['semester'],
							'guru_id'		=> $i['guru_id']					
						);

			$this->Mapel_model->edit($data, $id_mapel);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('mapel'), 'refresh');

		}
		// End Masuk Database
	}
	// end Edit


	// Delete
	public function delete($id_mapel){
		$mapel = $this->Mapel_model->detail($id_mapel);
		$data = array('id_mapel' => $mapel->id_mapel);

		$this->Mapel_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('mapel'), 'refresh');
	}
}

/* End of file mapel.php */
/* Location: ./application/controllers/mapel.php */