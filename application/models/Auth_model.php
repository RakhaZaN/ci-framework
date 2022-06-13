<?php
class Auth_model extends CI_Model
{

    protected $table = 'user';

    public function getAll()
    {
        // Query
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function find($value, $field = 'id')
    {
        // Query
        $this->db->where($field, $value);
        $query = $this->db->get($this->table);

        return $query->row();
    }

    public function save($data, $is_update = false)
    {
        // Query
        if ($is_update) {
            $this->db->update($this->table, $data, ['id' => $data['id']]);
        } else {
            $this->db->insert($this->table, $data);
        }
    }

    public function delete($data)
    {
        // Query
        $this->db->delete($this->table, $data);
    }

	public function authentication($data)
	{
		// Query
		$this->db->where('username', $data['username']);
		$this->db->where('password', md5($data['password']));
		$query = $this->db->get($this->table);

		return $query->row();
	}
}
