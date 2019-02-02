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
              $this->load->model('Kajian_model');
              $this->load->model('ProgramStudi_model');
							$this->load->model('Dosen_model');
							$this->load->model('Mahasiswa_model');

        }
	public function listData()
	{
		$data['mhs']=$this->BidangKajian_model->getAll();
		$this->load->view('dosen/Header');
		$this->load->view('dosen/BidangKajian', $data);
		$this->load->view('dosen/Footer');
	}

	public function listDataAjax()
	{
		$list=$this->BidangKajian_model->getAllAjax();
		$data= array();
		foreach ($list as $l) {
			if($l->nim != null){
					 $row = array();
					 $row[] = '<td><input type="checkbox" id="'.$l->nim.'"></td>';
					 $row[] = $l->nim;
					 $row[] = $l->namaLengkap;
					 $row[] = $l->namaInstansi;
					 $row[] = $l->namaKajian;
					 // $row[] = $l->ips1;
					 // $row[] = $l->ips2;
					 // $row[] = $l->ips3;
					 // $row[] = $l->ips4;
					 // $row[] = $l->ips5;
					 $row[] = $l->nama;
					 $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$l->nim."'".')"><i class="glyphicon glyphicon-pencil"></i> Plot Dospem</a>';
					 $data[] = $row;
				}
			 }
			 $output = array(
            "data" => $data,
                );
		echo json_encode($output);
	}
	public function detailMahasiswaAjax($nim)
	{
		$data=$this->Mahasiswa_model->getId($nim)->result();
		echo json_encode($data);
	}
	public function updateDospemAjax()
	{
		$data = array(
                'idDospem' => $this->input->post('dospem'),
            );
		$mhs = $this->input->post('nim');
		$this->BidangKajian_model->update($mhs,$data);
		$respon['mhs'] = array('status' => TRUE);
		echo json_encode($respon['mhs']);
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
	public function kajian($value='',$id='')
	{
		switch ($value) {
			case 'add':
				$data = array('namaKajian'=>strtoupper($this->input->post('namaKajian')));
				$idKajian = $this->Kajian_model->insert($data);
				$res = [];
				// print_r($this->input->post('idProgramStudi'));die();
				foreach ($this->input->post('idProgramStudi') as $key => $value) {
					$res['idKajian'] = $idKajian;
					$res['idProgramStudi'] = $value;
					// print_r($res);die();
					$this->Kajian_model->insert_kajian($res);
				}
				redirect('dosen/BidangKajian/kajian','refresh');
				break;
			case 'delete':
				$this->Kajian_model->delete($id);
				$this->Kajian_model->delete_kajian($id);
				redirect('dosen/BidangKajian/kajian','refresh');
				break;
			default:
				$res = $this->Kajian_model->getAll();
				$data['kajian'] =[];
				foreach ($res->result_array() as $key) {
					$hsl = $this->Kajian_model->getProgramStudi($key['idKajian'])->result_array();
					$mm = [];
					foreach ($hsl as $nn) {
						$mm[] = $nn['namaProgramstudi'];
						// array_push($key['kode'], $nn['namaProgramstudi']);
					}
					$key['kode'] = $mm;
					array_push($data['kajian'], $key);
				}
				$data['programStudi'] = $this->ProgramStudi_model->getAll();
				$this->load->view('dosen/Header');
				$this->load->view('dosen/Kajian', $data);
				$this->load->view('dosen/Footer');
				break;
		}
	}
	public function viewPlotDosen()
	{
		$dosen =  $this->Dosen_model->getAll()->result();
		if ($dosen)
		{
			$data['datadosen']= $dosen;
		}
		$mhs =	$this->BidangKajian_model->getMhsKajian()->result();
		if ($mhs)
		{
			$data['datamhs'] = $mhs;
		}
		$this->load->view('dosen/FormPlotDospem', $data);
	}
	public function updateDospem()
	{
		$dosen = $this->input->post('dosen');
		$mhs = $this->input->post('mhs');

		$idmhs = count($mhs);
		echo $mhs[0];
		$data = array(
			'idDospem' => $dosen
		);
		for($i=0 ; $i < $idmhs ; $i++){
			$where =  $mhs[$i];
			$this->BidangKajian_model->update($where,$data);
		}
		redirect('dosen/BidangKajian/viewPlotDosen');
	}
}
