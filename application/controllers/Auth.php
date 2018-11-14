<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	UNtuk login Mahasiswa
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->model('Dosen_model');
	}

	public function index()
	{
		$this->load->view('mahasiswa/Login');
		// $this->load->view('mahasiswa/index');
		// $this->load->view('mahasiswa/footer');
	}
	public function in($value='')
	{
		$data = array('nim' => $this->input->post('nim'),'password'=>md5($this->input->post('password')) );
		// print_r($data);
		$result = $this->Mahasiswa_model->getByWhere($data);
		if ($result->num_rows() > 0) {
			$this->session->set_userdata('mahasiswa',$result->result()[0]);
			$this->session->set_flashdata('info', '<div class="alert alert-info alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
			redirect('Welcome','refresh');
		}else{
			$this->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
			redirect('Auth','refresh');
		}
	}
	public function out($value='')
	{
		$this->session->unset_userdata('mahasiswa');
		$this->session->set_flashdata('info', '<div class="alert alert-info alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
		redirect('Welcome','refresh');
	}
	public function password()
	{
		// $where = array('nim' => $this->session->userdata('mahasiswa')->nim);
		$data = array('password' => md5($this->input->post('password')),'passwordChanged'=>1 );
		$this->Mahasiswa_model->update($this->session->userdata('mahasiswa')->nim,$data);
		redirect('Welcome','refresh');
	}
	public function dosen($value='')
	{
		if ($this->input->server('REQUEST_METHOD') == 'GET') {
			if ($value == 'out') {
				$this->session->unset_userdata('dosen');
				$this->session->set_flashdata('info', '<div class="alert alert-default alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
				redirect('Auth/dosen','refresh');
			}else{
				if ($this->session->userdata('dosen')) {
					redirect('dosen','refresh');
					//echo "";
				}else{
					$this->load->view('Login');
				}
			}
		}elseif($this->input->server('REQUEST_METHOD') == 'POST'){
			$data = array('email' => $this->input->post('email'),'password'=>md5($this->input->post('password')) );
			$result = $this->Dosen_model->getByWhere($data);
			if ($result->num_rows() > 0) {
				$this->session->set_userdata('dosen',$result->result()[0]);
				$this->session->set_flashdata('info', '<div class="alert alert-info alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
				redirect('dosen','refresh');
				//echo "Arahin ke kontroller Dosen";
				// redirect('Welcome','refresh');
			}else{
				$this->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
				redirect('Auth/dosen','refresh');
			}
		}
	}
	public function outdosen()
	{
		$this->session->unset_userdata('dosen');
		$this->session->set_flashdata('info', '<div class="alert alert-info alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-warning"></i> Alert!</h4> Warning alert preview. This alert is dismissable. </div>');
		redirect('Auth/dosen','refresh');
	}
}
