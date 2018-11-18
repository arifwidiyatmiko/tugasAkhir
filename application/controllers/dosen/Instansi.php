<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi extends CI_Controller {

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

              $this->load->model('Instansi_model');

        }
	public function listInstansi()
	{
		$this->load->view('dosen/ListMahasiswa');
	}

	public function listInstansiAll()
	{
		$data['instansi']=$this->Instansi_model->getAll();
		$this->load->view('dosen/ListInstansiAll', $data);
		//$this->load->view('dosen/ListMahasiswaAll');
	}

  public function detailInstansi($idInstansi)
	{
		$data['detailInstansi']=$this->Instansi_model->getId($idInstansi)->result();
		$this->load->view('dosen/detailInstansi',$data);
	}
}
