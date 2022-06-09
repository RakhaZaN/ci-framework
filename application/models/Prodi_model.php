<?php

class Prodi_model extends CI_Model
{

	protected $table = 'prodi';

	public function getAll()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function find($value, $field='kode')
	{
		$this->db->where($field, $value);
		$query = $this->db->get($this->table);

		return $query->row();
	}

}
