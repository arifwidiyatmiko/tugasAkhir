<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_model {

	/**
	UNtuk login Mahasiswa
	 */

	public function getByWhere($where)
	{
		$this->db->where($where);
		return $this->db->get('mahasiswa');
	}
	function get_enum_values( $table, $field )
	{
	    $type = $this->db->query( "SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'" )->row( 0 )->Type;
	    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
	    $enum = explode("','", $matches[1]);
	    return $enum;
	}
	public function getId($id)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
	    $this->db->join('bidangkajian', 'bidangkajian.nim = mahasiswa.nim','left');
			$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
	    $this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
		$this->db->where('mahasiswa.nim',$id);
		return $this->db->get();
	}

	public function getIdDospem($id)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
	    $this->db->join('bidangkajian', 'bidangkajian.nim = mahasiswa.nim','left');
			$this->db->join('kajian', 'bidangkajian.idKajian = kajian.idKajian','left');
	    $this->db->join('instansi', 'bidangkajian.idInstansi = instansi.idInstansi','left');
		$this->db->where('bidangkajian.idDosen',$id);
		return $this->db->get();
	}

	public function insert($value)
	{
		$this->db->insert('mahasiswa', $value);
	}
	public function nimSearch($value)
	{
		$sql = "SELECT nim FROM mahasiswa WHERE nim LIKE '%".$value."%' ";
		return $this->db->query($sql)->result();
	}

	public function delete($value)
	{
		$this->db->where('nim', $value);
		$this->db->delete('mahasiswa');
	}

	public function update($id,$data)
	{
		$this->db->where('nim', $id);
		$this->db->update('mahasiswa', $data);
	}
	public function getAll($value='')
	{
		return $this->db->get('mahasiswa');
	}
}
