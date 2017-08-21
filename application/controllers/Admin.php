<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Mhs_model');

		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('Login/admin');
		   exit;
		}
	}

	function index(){

		$data = array(
			'title'		=> 'Input Data | Sistem Parkir',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}


	function logout_admin(){
		$this->session->unset_userdata('username');
		redirect('Login/admin');
	}

	function add_mhs(){

		date_default_timezone_set("Asia/Jakarta");
		if($this->input->post('add_mhs')){
			$input = array(
				'nama'				=> $this->input->post('nama'),
				'nim'				=> $this->input->post('nim'),
				'jurusan'			=> $this->input->post('jurusan'),
				'tgl_daftar'		=> date("d-m-Y"),
				'lokasi'			=> $this->input->post('lokasi'),
				'angkatan'			=> $this->input->post('angkatan'),
				'foto_kendaraan'	=> $this->input->post('nim').'.png',
				'plat_kendaraan'	=> $this->input->post('plat_kendaraan'),
				'tipe'				=> $this->input->post('tipe'),
				'tahun_kendaraan'	=> $this->input->post('tahun_kendaraan'),
				'no_hp'				=> $this->input->post('no_hp'),
				'kode_stiker'		=> $this->input->post('kode_stiker')
			);
			$this->Mhs_model->insert($input);
			$this->Mhs_model->do_upload($this->input->post('nim'));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Admin');
			exit;
		}
		$data = array(
			'title'		=> 'Input Data| Sistem Parkir',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function list_mhs(){
		$data = array(
			'title'		=> 'Manage Data | Sistem Parkir',
			'content'	=> 'list_mhs',
			'dt'		=> $this->Mhs_model->get_all()
		);
		$this->load->view('includes/template', $data);
	}

	function edit_mhs(){
		$id_mhs = $this->uri->segment(3);

		if($this->input->post('edit_mhs')){
			$input = array(
				'nama'				=> $this->input->post('nama'),
				'nim'				=> $this->input->post('nim'),
				'jurusan'			=> $this->input->post('jurusan'),
				'lokasi'			=> $this->input->post('lokasi'),
				'angkatan'			=> $this->input->post('angkatan'),
				'plat_kendaraan'	=> $this->input->post('plat_kendaraan'),
				'tipe'				=> $this->input->post('tipe'),
				'tahun_kendaraan'	=> $this->input->post('tahun_kendaraan'),
				'no_hp'				=> $this->input->post('no_hp'),
				'keterangan'		=> $this->input->post('keterangan'),
				'kode_stiker'		=> $this->input->post('kode_stiker')
			);
			$this->Mhs_model->update($id_mhs, $input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
			redirect('Admin/list_mhs');
			exit;
		}
		$data = array(
			'title'		=> 'Edit Data| Sistem Parkir',
			'content'	=> 'edit_mhs',
			'dt'		=> $this->Mhs_model->get_data($id_mhs)
		);
		$this->load->view('includes/template', $data);
	}

	function delete_mhs(){
		$id_mhs = $this->uri->segment(3);

		if(isset($id_mhs)){
			$this->Mhs_model->delete($id_mhs);
			redirect('Admin/list_mhs');
			exit;
		} else {
			redirect('Admin/list_mhs');
			exit;
		}
	}

	public function verifikasi()
	{
		$id_mhs = $this->uri->segment(3);

		if (isset($id_mhs))
		{
			$mahasiswa = $this->Mhs_model->get_data($id_mhs);
			if ($mahasiswa->status == 'not verified')
			{
				$this->Mhs_model->update($id_mhs, array('status' => 'verified', 'keterangan' => 'Aktif'));
			}
			else
			{
				$this->Mhs_model->update($id_mhs, array('status' => 'not verified', 'keterangan' => 'Pengajuan'));	
			}
		}

		redirect('admin/list_mhs');
	}
}
 ?>
