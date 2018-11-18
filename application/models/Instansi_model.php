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

	public function getLikeWhere($where)
	{
	    $this->db->like('namaInstansi', $where['namaInstansi']);
	    $this->db->or_like('pimpinanInstansi', $where['pimpinanInstansi']);
	    $this->db->or_like('kontakInstansi', $where['kontakInstansi']);
	    $this->db->limit(1);
	    return $this->db->get('instansi');
	}

	public function insert($data)
	{
		$this->db->insert('instansi', $data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}

	public function update($id,$data)
	{
		$this->db->where('idInstansi', $id);
		$this->db->update('instansi', $data);
	}
	public function getAll($value='')
	{
		return $this->db->get('instansi');
	}
}
