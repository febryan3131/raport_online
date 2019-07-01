<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	//Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	// Listing data admin
	public function index()
	{
		$admin = $this->admin_model->listing();
		

		$data = array(	'title'	 => 'Data admin ('.count($admin).')',

						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuSiswa' => "",
						'menuAdmin' => "active",
						'menuAkademik' => "",
						'menuKelas' => "",
						'menuNilai' => "",	
						'menuMapel' => "",

						'menuCetak' => "",
						'menuLaporanGuru' => "",
						'menuLaporanNilai' => "",
						'menuLaporanKelas' => "",


						'admin'	 => $admin, 
						'isi'	 => 'admin/list'
	 			);
		$this->load->view('top');
		$this->load->view('navigator', $data);
		$this->load->view('admin/list');
	}

	//Tambah
	public function tambah(){

		//Validasi tambah data admin
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama admin','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'username','Username','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'password','Password','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'alamat','Alamat','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'email','Email','required',
					array(	'required'		=>	'%s harus diisi') );	
		
		if ($valid->run() === FALSE) {
			// End Validasi tambah data admin


		$data = array('title'	 => 'Tambah admin',
						'isi'	 => 'admin/tambah',
						
						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuSiswa' => "",
						'menuAdmin' => "active",
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
		$this->load->view('admin/tambah');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	
							'nama'			=> $i->post('nama'),
							'username'	=> $i->post('username'),
							'password'	=> $i->post('password'),							
							'alamat'		=> $i->post('alamat'),							
							'email'	=> $i->post('email'),
			);

			$this->admin_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('admin'), 'refresh');

		}
		// End Masuk Database
	}
	// end tambah


	//Edit 
	// $id_admindi lempar ke model 
	public function edit($id_admin){

		$admin = $this->admin_model->detail($id_admin);

		//Validasi
		$valid = $this->form_validation;
		
		$valid->set_rules('nama','Nama admin','required',
					array(	'required' 		=>	'%s harus diisi') );

		$valid->set_rules(	'username','Username','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'password','Password','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'alamat','Alamat','required',
					array(	'required'		=>	'%s harus diisi') );

		$valid->set_rules(	'email','Email','required',
					array(	'required'		=>	'%s harus diisi') );	

		if ($valid->run() === FALSE) {
			// End Validasi



		$data = array('title'	 => 'Edit admin: '.$admin->nama,
						'admin'	 => $admin,
						'isi'	 => 'admin/edit',
						
						'menuDasbor' => "",
						'menuHome' => "",
						'menuGuru' => "",
						'menuSiswa' => "",
						'menuAdmin' => "active",
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
		$this->load->view('admin/edit');
		// Masuk database
		}
		else{
			$i = $this->input;
			$data = array(	'id_admin' 			=> $id_admin,
							'nama'			=> $i->post('nama'),
							'username'	=> $i->post('username'),
							'password'	=> $i->post('password'),
							'alamat'		=> $i->post('alamat'),				
							'email'	=> $i->post('email'),
			);

			$this->admin_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('admin'), 'refresh');

		}
		// End Masuk Database
	}
	// end Edit


	// Delete
	public function delete($id_admin){
		$admin= $this->admin_model->detail($id_admin);
		$data = array('id_admin' => $admin->id_admin);

		$this->admin_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin'), 'refresh');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */