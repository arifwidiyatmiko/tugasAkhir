<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('mahasiswa')) {
			redirect('Auth','refresh');
		}
		$this->load->model('Mahasiswa_model');
		$data = $this->Mahasiswa_model->getId($this->session->userdata('mahasiswa')->nim);
		$res = $data->result()[0];
		$this->session->set_userdata('mahasiswa',$res);
	}

	public function index()
	{
		if ($this->session->userdata('mahasiswa')->passwordChanged == 0) {
			redirect('Welcome/changePass','refresh');
		}
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/index');
		$this->load->view('mahasiswa/footer');
	}
	public function biodata($value='')
	{
		$data['pk'] = $this->Mahasiswa_model->get_enum_values('mahasiswa','programStudi');
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/biodata',$data);
		$this->load->view('mahasiswa/footer');
	}
	public function kajian($value='')
	{
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/Indeksprestasi');
		$this->load->view('mahasiswa/footer');
	}
	public function submitip($value='')
	{
		$data = array(
				'ips1' =>$this->input->post('ips1'),
				'ips2' =>$this->input->post('ips2'),
				'ips3' =>$this->input->post('ips3'),
				'ips4' =>$this->input->post('ips4'),
				'ips5' =>$this->input->post('ips5'));
		$this->Mahasiswa_model->update($this->session->userdata('mahasiswa')->nim,$data);
		$this->session->set_flashdata('success','<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  Terima Kasih sudah memperbarui Biodata.
</div>');
		redirect('Welcome/biodata');
	}
	public function submit()
	{
			$data = array(
			'namaLengkap' => strtoupper($this->input->post('namaLengkap')), 
			'tempatLahir' => strtoupper($this->input->post('tempatLahir')), 
			'tanggalLahir' => substr($this->input->post('tanggalLahir'),6,4)."-".substr($this->input->post('tanggalLahir'),3,2)."-".substr($this->input->post('tanggalLahir'),0,2),
// 			'tanggalLahir' => date("Y-m-d",strtotime($this->input->post('tanggalLahir'))), 
			'jenisKelamin' => $this->input->post('jenisKelamin'), 
			'jalurMasuk' => $this->input->post('jalurMasuk'), 
			'ibuKandung' => strtoupper($this->input->post('ibuKandung')), 
// 			'tanggalMasuk' => date("Y-m-d",strtotime($this->input->post('tanggalMasuk'))), 
			'tanggalMasuk' => substr($this->input->post('tanggalMasuk'),6,4)."-".substr($this->input->post('tanggalMasuk'),3,2)."-".substr($this->input->post('tanggalMasuk'),0,2),
			'programStudi' => $this->input->post('programStudi'), 
			'batasStudi' => '2023', 
			'tinggi' => $this->input->post('tinggi'), 
			'berat' => $this->input->post('berat'), 
			'kewarganegaraan' => $this->input->post('kewarganegaraan'), 
			'golonganDarah' => $this->input->post('golonganDarah'), 
			'statusKawin' => $this->input->post('statusKawin'), 
			'agama' => strtoupper($this->input->post('agama')), 
			'alamatTinggal' => $this->input->post('alamatTinggal'), 
			'kotakabupatenTinggal' => $this->input->post('kotaKabupatenTinggal'), 
			'kecamatanTinggal' => $this->input->post('kecamatanTinggal'), 
			'kelurahanTinggal' => $this->input->post('kelurahanTinggal'), 
			'posTinggal' => $this->input->post('kodepos'), 
			'rtrwTinggal' => $this->input->post('rt')."/".$this->input->post('rw'), 
			'alamatDomisili' => $this->input->post('alamatDomisili'), 
			'kotakabupatenDomisili' => $this->input->post('kotaKabupatenDomisili'), 
			'kecamatanDomisili' => $this->input->post('kecamatanDomisili'), 
			'kelurahanDomisili' => $this->input->post('kelurahanDomisili'), 
			'posDomisili' => $this->input->post('posDomisili'), 
			'telepon' => $this->input->post('telepon'), 
			'NIK' => $this->input->post('NIK'), 
			'penghasilanParent'=>$this->input->post('penghasilanParent'),
			'rtrwDomisili' => $this->input->post('rtDomisili')."/".$this->input->post('rwDomisili'),
			'namaAyah'=>$this->input->post('namaAyah'), 
			'namaIbu'=>$this->input->post('namaIbu'), 
			'nikAyah'=>$this->input->post('nikAyah'), 
			'nikIbu'=>$this->input->post('nikIbu'), 
			'email'=>$this->input->post('email'),
			'isConfirm'=>1 
		);
// 		echo json_encode($data);die();
		$this->Mahasiswa_model->update($this->session->userdata('mahasiswa')->nim,$data);
		$this->session->set_flashdata('success','<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  Terima Kasih sudah memperbarui Biodata.
</div>');
		redirect('Welcome/biodata');
	}
	public function changePass($value='')
	{
		$this->load->view('mahasiswa/Gantipass');
	}
	public function password($value='')
	{
		# code...
	}
}
