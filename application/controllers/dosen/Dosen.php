<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

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

              $this->load->model('Dosen_model');

        }
	public function listMahasiswa()
	{
		$this->load->view('dosen/ListMahasiswa');
	}

	public function listDosenAll()
	{
		$data['dosen']=$this->Dosen_model->getAll();
		$this->load->view('dosen/ListDosenAll', $data);
		//$this->load->view('dosen/ListMahasiswaAll');
	}
  public function tambahDataDosen()
  {
    $data['dosen']=$this->Dosen_model->getAll();
    $this->load->view('dosen/FormTambahDosen');
    //$this->load->view('dosen/ListMahasiswaAll');
  }

  public function simpanTambahDosen()
  {
    $nama = $this->input->post('nama_dosen');
		$email = $this->input->post('email_dosen');
		$nip = $this->input->post('nip_dosen');
		$status = $this->input->post('status');
  	$username = $this->input->post('username_dosen');


		$data = array(
			'nama' => $nama,
      'username' => $username,
			'email' => $email,
			'password' => md5('12345'),
			'nip' => $nip,
			'isAdmin' => $status
			);
		$this->Dosen_model->insert($data);
		redirect('dosen/Dosen/listDosenAll');
  }

  public function simpanUbahDosen()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama_dosen');
		$email = $this->input->post('email_dosen');
		$nip = $this->input->post('nip_dosen');
		$status = $this->input->post('status');
  	$username = $this->input->post('username_dosen');


		$data = array(
			'nama' => $nama,
      'username' => $username,
			'email' => $email,
			'nip' => $nip,
			'isAdmin' => $status
			);
		$this->Dosen_model->update($id,$data);
		redirect('dosen/Dosen/listDosenAll');
  }

  public function hapusDataDosen($id)
	{
		$this->Dosen_model->delete($id);
		redirect('dosen/Dosen/listDosenAll');
	}

  public function getEditDosen($id)
	{
		$data['detaildosen']=$this->Dosen_model->getId($id)->result();
		$this->load->view('dosen/FormEditDosen',$data);
	}
}
