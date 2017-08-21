<?php

class Mahasiswa extends CI_Controller{

	protected $id_mhs;

	function __construct(){
		parent::__construct();
		$this->load->model('Mhs_model');

		$this->id_mhs = $this->session->userdata('id_mhs');
		if (!isset($this->id_mhs)) {
		   redirect('Login/Mhs');
		   exit;
		}
	}

	function index(){
		$data = array(
			'dt'			 		=> $this->Mhs_model->get_data_byNim($this->session->userdata('nim')),
			'title'				=> 'Data | Sistem Parkir',
			'content'			=> 'biodata'
		);
		$this->load->view('includes/template', $data);
	}

	function input_data(){

	date_default_timezone_set("Asia/Jakarta");
    if($this->input->post('add_mhs')){
			$input = array(
				'nama'						=> $this->input->post('nama'),
				'nim'							=> $this->input->post('nim'),
				'jurusan'					=> $this->input->post('jurusan'),
				'tgl_daftar'			=> date("d-m-Y"),
				'lokasi'					=> $this->input->post('lokasi'),
				'angkatan'				=> $this->input->post('angkatan'),
				'foto_kendaraan'	=> $this->input->post('nim').'.png',
				'plat_kendaraan'	=> $this->input->post('plat_kendaraan'),
				'tipe'						=> $this->input->post('tipe'),
				'tahun_kendaraan'	=> $this->input->post('tahun_kendaraan'),
				'no_hp'				=> $this->input->post('no_hp')
			);
			$this->Mhs_model->update($this->session->userdata('id_mhs'), $input);
			$this->Mhs_model->do_upload($this->input->post('nim'));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Mahasiswa');
			exit;
		}
		$data = array(
			'title'		=> 'Input Data| Sistem Parkir',
			'content'	=> 'biodata'
		);
		$this->load->view('includes/template', $data);

	}

    public function Pernyataan() {
    	$data = array(
    		'data'	=> $this->Mhs_model->get_data($this->id_mhs)	
    	);
    	
    	$html = $this->load->view('surat_pernyataan', $data, true);
    	$pdfFilePath = "Surat Pernyataan Sistem Parkir Fasilkom " . $this->id_mhs . '.pdf';
    	$this->load->library('m_pdf');
    	$this->m_pdf->pdf->WriteHTML($html);
    	$this->m_pdf->pdf->Output($pdfFilePath, "D");

   //      $data = array(
   //      	'dt' 		=> $this->Mhs_model->get_data($this->id_mhs)
			// );
   //      $html = $this->load->view('formulir_pendaftaran', $data, true);

   //      $pdfFilePath = "Formulir ".$this->session->userdata('nisn').".pdf";

   //      $this->load->library('m_pdf');

   //      $this->m_pdf->pdf->WriteHTML($html);

   //      $this->m_pdf->pdf->Output($pdfFilePath, "D");
    }

}

 ?>
