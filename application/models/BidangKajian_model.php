<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BidangKajian_model extends CI_model {

	/**
	UNtuk login Mahasiswa
	 */

	public function update($id,$data)
	{
		$this->db->where('nim', $id);
		$this->db->update('bidangkajian', $data);
	}
	public function getAll($value='')
	{
    $this->db->select('*');
    $this->db->from('bidangkajian');
    $this->db->join('mahasiswa', 'bidangkajian.nim = mahasiswa.nim');
    $this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi');
    $query = $this->db->get();
		return $query;
	}
}
