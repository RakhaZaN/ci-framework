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

	public function save($data, $is_update=false)
	{
		// Query
		if ($is_update) {
			$this->db->update($this->table, $data, ['nim' => $data['nim']]);
		} else {
			$this->db->insert($this->table, $data);
		}
	}

	public function delete($data)
	{
		// Query
		$this->db->delete($this->table, $data);
	}

	public function predikat()
	{
		return $this->ipk > 3.75 ? 'Cumlaude' : 'Baik';
	}
}
