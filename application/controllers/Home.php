<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/landing-page');
	}

	public function admin()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/dashboard');
		$this->load->view('layout/footer');
	}

}
