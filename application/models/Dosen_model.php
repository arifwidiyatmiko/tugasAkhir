<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_model {

	/**
	UNtuk login dosen
	 */

	public function getByWhere($where)
	{
		$this->db->where($where);
		return $this->db->get('dosen');
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
		$this->db->where('id',$id);
		return $this->db->get('dosen');
	}
	public function insert($value)
	{
		$this->db->insert('dosen', $value);
	}
	

	public function delete($value)
	{
		$this->db->where('id', $value);
		$this->db->delete('dosen');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('dosen', $data);
	}
	public function getAll($value='')
	{
		return $this->db->get('dosen');
	}
}