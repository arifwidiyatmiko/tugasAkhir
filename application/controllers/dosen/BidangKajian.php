<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BidangKajian extends CI_Controller {

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
	 function __construct(){

              parent::__construct();

              $this->load->model('BidangKajian_model');

        }
	public function listData()
	{
		$data['mhs']=$this->BidangKajian_model->getAll();
		$this->load->view('dosen/Header');
		$this->load->view('dosen/BidangKajian', $data);
		$this->load->view('dosen/Footer');
	}

	public function updateVerifikasi()
	{
		$list_id = $this->input->post('id');
		$data = array(
			'statusKajian' => 'Terverifikasi'
		);
		foreach ($list_id as $id) {
      $this->BidangKajian_model->update($id,$data);
        }
    echo json_encode(array("status" => TRUE));
	}

	public function updateVerifikasiSatu($nim)
	{
		$data = array(
			'statusKajian' => 'Terverifikasi'
		);
    $this->BidangKajian_model->update($nim,$data);
		$data['detailmhs']=$this->Mahasiswa_model->getId($nim)->result();
		$this->load->view('dosen/DetailMahasiswa',$data);
	}

  public function detailMahasiswa($nim)
	{
		$data['detailmhs']=$this->Mahasiswa_model->getId($nim)->result();
		$this->load->view('dosen/DetailMahasiswa',$data);
	}
	public function viewFile()
	{
	$this->load->helper('download');
    	$data   = file_get_contents('localhost/tugasAkhir/assets/fileMahasiswa');
		$name   = '1.pdf';
		force_download($name, $data);
	}
}
