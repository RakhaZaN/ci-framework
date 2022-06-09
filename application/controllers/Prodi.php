<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function index()
    {
		// Load model
		$this->load->model('Prodi_model', 'model');
		
		// Get all data prodi
		$list_prodi = $this->model->getAll();

		// Set data
		$data['list_prodi'] = $list_prodi;

		// Load view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pages/prodi/index', $data);
        $this->load->view('layout/footer');
    }
}
