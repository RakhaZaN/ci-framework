<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('Mahasiswa_model', 'model');

		$list_mhs = $this->model->getAll();
		$data['list_mhs'] = $list_mhs;

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/mahasiswa/index', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/mahasiswa/input');
		$this->load->view('layout/footer');
	}

}
