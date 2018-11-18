<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kajian_model extends CI_model {

	
	public function getWhere($where)
	{
		$this->db->where($where);
		return $this->db->get('kajian');
	}
	public function getAll($value='')
	{
	    return $this->db->get('kajian');
	}
	public function getKajianProgramstudi($kode)
	{
		$this->db->select('*');
		$this->db->join('kajian_programStudi', 'kajian_programStudi.idKajian = kajian.idKajian', 'INNER');
		$this->db->where('kajian_programStudi.idProgramStudi', $kode);
		return $this->db->get('kajian');
	}
}
