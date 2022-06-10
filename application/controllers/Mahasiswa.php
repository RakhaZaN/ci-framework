<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// load model
		$this->load->model('Mahasiswa_model', 'mhs');
	}

	public function index()
	{
		$list_mhs = $this->mhs->getAll();
		$data['list_mhs'] = $list_mhs;

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/mahasiswa/index', $data);
		$this->load->view('layout/footer');
	}

	public function show()
	{
		// Get input
		$_nim = $this->input->get('nim');

		// Find data
		$data['mhs'] = $this->mhs->find($_nim);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/mahasiswa/detil', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/mahasiswa/input');
		$this->load->view('layout/footer');
	}

	public function store()
	{
		// Get data post
		$data_post = $this->input->post();
		// Set data
		$data['nim'] = $data_post['fnim'];
		$data['nama'] = $data_post['fname'];
		$data['gender'] = $data_post['rgender'];
		$data['tmp_lahir'] = $data_post['ftmplahir'];
		$data['tgl_lahir'] = $data_post['ftgllahir'];
		$data['ipk'] = $data_post['fipk'];
		$data['prodi_kode'] = $data_post['fprodi'];

		// Call save function
		$this->mhs->save($data);

		redirect(base_url('mahasiswa/index'));
	}

	public function edit()
	{
		// Get data mahasiswa
		$data_mhs = $this->mhs->find($this->input->get('nim'));

		// Set data
		$data['mhs'] = $data_mhs;

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/mahasiswa/input', $data);
		$this->load->view('layout/footer');
	}

	public function update()
	{
		// Get data post
		$data_post = $this->input->post();
		// Set data
		$data['nim'] = $data_post['fnim'];
		$data['nama'] = $data_post['fname'];
		$data['gender'] = $data_post['rgender'];
		$data['tmp_lahir'] = $data_post['ftmplahir'];
		$data['tgl_lahir'] = $data_post['ftgllahir'];
		$data['ipk'] = $data_post['fipk'];
		$data['prodi_kode'] = $data_post['fprodi'];

		// Call save function
		$this->mhs->save($data, true);

		redirect(base_url('mahasiswa/index'));
	}

	public function delete()
	{
		// Set data
		$data['nim'] = $this->input->get('nim');

		// Call delete function
		$this->mhs->delete($data);
	}

}
