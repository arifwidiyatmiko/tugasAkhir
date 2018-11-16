<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi_model extends CI_model {

	/**
	UNtuk login Mahasiswa
	 */

	public function getId($id)
	{
		$this->db->where('idInstansi',$id);
		return $this->db->get('instansi');
	}

	public function update($id,$data)
	{
		$this->db->where('nim', $id);
		$this->db->update('mahasiswa', $data);
	}
	public function getAll($value='')
	{
		return $this->db->get('instansi');
	}
}
