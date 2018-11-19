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
	public function insert($data)
	{
		$this->db->insert('kajian', $data);
		$id = $this->db->insert_id();
		return $id;
	}
	public function delete($id)
	{
		$this->db->where('idKajian', $id);
		$this->db->delete('kajian');
	}
	public function delete_kajian($value='')
	{
		$this->db->where('idKajian', $id);
		$this->db->delete('kajian_programStudi');

	}
	public function insert_kajian($data)
	{
		$this->db->insert('kajian_programStudi', $data);
	}
	public function getKajianProgramstudi($kode)
	{
		$this->db->select('*');
		$this->db->join('kajian_programStudi', 'kajian_programStudi.idKajian = kajian.idKajian', 'INNER');
		$this->db->where('kajian_programStudi.idProgramStudi', $kode);
		return $this->db->get('kajian');
	}
	public function getProgramStudi($kode)
	{
		$this->db->select('*');
		$this->db->join('programStudi', 'programStudi.idProgramStudi = kajian_programStudi.idProgramStudi', 'left');
		$this->db->where('kajian_programStudi.idKajian', $kode);
		return $this->db->get('kajian_programStudi');

	}
}
