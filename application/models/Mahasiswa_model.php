<?php
class Mahasiswa_model extends CI_Model {

	protected $table = 'mahasiswa';

	public function getAll()
	{
		// Query
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function find($value, $field='nim')
	{
		// Query
		$this->db->where($field, $value);
		$query = $this->db->get($this->table);

		return $query->row();
	}

	public function predikat()
	{
		return $this->ipk > 3.75 ? 'Cumlaude' : 'Baik';
	}
}
