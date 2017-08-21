<?php  

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('Mhs_model');
	}

	public function index()
	{
		$data = array(
			'title'		=> '.:: Sistem Parkir Fakultas Ilmu Komputer | Universitas Sriwijaya',
			'content'	=> 'homepage'
		);
		$this->load->view('includes/template', $data);		
	}

	function data(){
		$dt = $this->Mhs_model->get_all();

		$angkatan = $this->uri->segment(3);
		if (isset($angkatan))
		{
			$jurusan = $this->uri->segment(4);
			if (isset($jurusan))
			{
				$jurusan = str_replace('%20', ' ', $jurusan);
				$dt = $this->Mhs_model->get_data_jurusan($jurusan);	
			}
			else
			{
				$dt = $this->Mhs_model->get_data_byConditional(array('angkatan' => $angkatan))->result();
			}	
		}

		$nim = $this->input->post('nim');
		if (isset($nim))
		{
			$dt = $this->Mhs_model->get_data_byConditional(array('nim' => $nim))->result();
		}

		$data = array(
			'title'		=> '.:: Sistem Parkir Fakultas Ilmu Komputer | Universitas Sriwijaya',
			'content'	=> 'home',
			'dt'		=> $dt
		);
		$this->load->view('includes/template', $data);
	}

	function angkatan(){

	}
}

?>