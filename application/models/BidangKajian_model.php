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
	public function insert($data)
	{
		$this->db->insert('bidangkajian', $data);
	}
	public function getAll($value='')
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('bidangkajian', 'bidangkajian.nim = mahasiswa.nim','left');
		$this->db->join('dosen', 'bidangkajian.idDospem = dosen.id','left');
		$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
		$this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
    return $this->db->get();
	}
	public function count_all($value='')
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('bidangkajian', 'bidangkajian.nim = mahasiswa.nim','left');
		$this->db->join('dosen', 'bidangkajian.idDospem = dosen.id','left');
		$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
		$this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
    return $this->db->count_all_results();
	}
	public function count_filtered($value='')
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('bidangkajian', 'bidangkajian.nim = mahasiswa.nim','left');
		$this->db->join('dosen', 'bidangkajian.idDospem = dosen.id','left');
		$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
		$this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function getAllAjax($value='')
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('bidangkajian', 'mahasiswa.nim = bidangkajian.nim','left');
		$this->db->join('dosen', 'bidangkajian.idDospem = dosen.id','left');
		$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
		$this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
		$query = $this->db->get();
		return $query->result();
	}
	public function getNim($nim)
	{
		$this->db->where('nim', $nim);
		return $this->db->get('bidangkajian');
	}
	public function getMhsKajian($value='')
	{
		$this->db->select('*');
		$this->db->from('bidangkajian');
		$this->db->join('mahasiswa', 'bidangkajian.nim = mahasiswa.nim','left');
		//$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
		//$this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
		return $this->db->get();
	}
	// public function update_dospem($id,$data)
	// {
	// 	$this->db->where('nim', $id);
	// 	$this->db->update('idDospem', $data);
	// }

}
