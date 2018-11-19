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
		// echo "string";die();
		if (!$this->session->userdata('mahasiswa')) {
			redirect('Auth','refresh');
		}
		$this->load->model('Mahasiswa_model');
		$this->load->model('Kajian_model');
		$this->load->model('Instansi_model');
		$this->load->model('BidangKajian_model');
		// echo $this->session->userdata('mahasiswa')->nim;
		$data = $this->Mahasiswa_model->getId($this->session->userdata('mahasiswa')->nim);

		$res = $data->result()[0];
		$res->nim = $this->session->userdata('mahasiswa')->nim;
		// print_r($data->result());die();
		$this->session->set_userdata('mahasiswa',$res);
		// echo "string";die();
	}

	public function index()
	{
		if ($this->session->userdata('mahasiswa')->passwordChanged == 0) {
			redirect('Welcome/changePass','refresh');
		}
		$biodata = $this->Mahasiswa_model->getByWhere(array('nim'=>$this->session->userdata('mahasiswa')->nim))->result()[0];
		// print_r($biodata);die();
		if ($biodata->tanggalLahir != NULL && $biodata->tempatLahir != NULL && $biodata->jenisKelamin != NULL && $biodata->jalurMasuk != NULL && $biodata->programStudi != NULL && $biodata->ibuKandung != NULL && $biodata->telepon != NULL && $biodata->NIK != NULL && $biodata->agama != NULL && $biodata->alamatTinggal) {
			$data['isKajian'] = TRUE;
		}else{$data['isKajian']=FALSE;}
		if ($biodata->isConfirm == 0) {
			$data['isKajian'] = FALSE;
		}

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/index',$data);
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
		$data['kajian'] = $this->Kajian_model->getKajianProgramstudi(substr($this->session->userdata('mahasiswa')->nim, 2,1));
		// print_r($data);die();
		$data['instansi'] = $this->Instansi_model->getAll();
		$data['bidKajian'] = $this->BidangKajian_model->getNim($this->session->userdata('mahasiswa')->nim);
		// print_r($data['bidKajian']->result());die();
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/Indeksprestasi',$data);
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
	public function submitkajian($value='')
	{
		$data = array('idKajian' => $this->input->post('kajian'),'nim'=>$this->session->userdata('mahasiswa')->nim,'statusKajian'=>0);
		$where = array('namaInstansi'=>$this->input->post('namaInstansi'),'pimpinanInstansi'=>$this->input->post('pimpinanInstansi'),'kontakInstansi'=>$this->input->post('kontakInstansi'),'posInstansi'=>$this->input->post('posInstansi'),'emailInstansi'=>$this->input->post('emailInstansi'),'alamatInstansi'=>$this->input->post('alamatInstansi'),'kotaKabInstansi'=>$this->input->post('kotaKabInstansi'));
		
		$res = $this->Instansi_model->getLikeWhere($where);
		// print_r($res->result());die();
		if ($res->num_rows() > 0) {

			$data['idInstansi'] = $res->result()[0]->idInstansi;
		}else{
			$data['idInstansi'] = $this->Instansi_model->insert($where);
		}
		$data['suratBalasanInst'] = $this->UploadFile($_FILES['suratBalasan'],'suratBalasan');
		// print_r($data);die();
		if ($this->BidangKajian_model->getNim($this->session->userdata('mahasiswa')->nim)->num_rows() != 0) {
			// echo "string";die();
			$this->BidangKajian_model->update($this->session->userdata('mahasiswa')->nim,$data);
		}else{
			// echo "sd";die();
			$this->BidangKajian_model->insert($data);
		}
		redirect('Welcome/kajian','refresh');
		
	}
	public function UploadFile($image,$name)
	{
		if ($image['size'] > 0) {
			// echo "string";die();
			$file_name = 'SB1_'.$this->session->userdata('mahasiswa')->nim.'_';
			$config['upload_path']   = './assets/filemahasiswa/SB/'; 
	        $config['allowed_types'] = 'pdf|PDF'; 
	        $config['max_size']      = 512000;
	        $config['file_name'] = $file_name;
	        $this->upload->initialize($config);
         	if ($this->upload->do_upload($name))
            {
            	$img = $this->upload->data();
            	return $img['file_name'];
            }else{
            	echo $this->upload->display_errors('<p>', '</p>');
            }
            //redirect('Foto');
         }else{
         	echo "";
         }
	}
	public function UploadImage($image,$name)
	{
		if ($image['size'] > 0) {
			// echo "string";die();
			$file_name = 'PF_'.$this->session->userdata('mahasiswa')->nim.'_';
			$config['upload_path']   = './assets/filemahasiswa/pasfoto/'; 
	        $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG'; 
	        $config['max_size']      = 204800;
	        $config['file_name'] = $file_name;
	        $this->upload->initialize($config);
         	if ($this->upload->do_upload($name))
            {
            	$img = $this->upload->data();
            	return $img['file_name'];
            }else{
            	echo $this->upload->display_errors('<p>', '</p>');
            }
            //redirect('Foto');
         }else{
         	echo "";
         }
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
			// 'programStudi' => $this->input->post('programStudi'), 
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
		$data['pasFoto'] = $this->UploadImage($_FILES['pasFoto'],'pasFoto');

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
