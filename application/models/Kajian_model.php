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
}
