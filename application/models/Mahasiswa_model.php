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

	public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite'] = true;
		$config['max_width'] = 720;
		$config['max_height'] = 1280;
		$new_name = $this->input->post('nim').'.png';
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		return $this->upload->do_upload('ffoto');
	}
}
