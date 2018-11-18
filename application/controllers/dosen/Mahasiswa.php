<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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

              $this->load->model('Mahasiswa_model');

        }
	public function listMahasiswa()
	{
		$this->load->view('dosen/ListMahasiswa');
	}

	public function listMahasiswaAll()
	{
		$data['mhs']=$this->Mahasiswa_model->getAll();
		$this->load->view('dosen/ListMahasiswaAll', $data);
		//$this->load->view('dosen/ListMahasiswaAll');
	}

  public function detailMahasiswa($nim)
	{
		$data['detailmhs']=$this->Mahasiswa_model->getId($nim)->result();
		$this->load->view('dosen/DetailMahasiswa',$data);
	}
}
