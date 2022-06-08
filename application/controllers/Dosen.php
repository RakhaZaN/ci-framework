<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$this->load->model('Dosen_model', 'dsn1');
		$this->dsn1->id = 1;
		$this->dsn1->nidn = '100001';
		$this->dsn1->name = 'Wahyudi';
		$this->dsn1->gender = 'L';
		$this->dsn1->pendidikan = 'S2';

		$this->load->model('Dosen_model', 'dsn2');
		$this->dsn2->id = 2;
		$this->dsn2->nidn = '100002';
		$this->dsn2->name = 'Dian Ayu';
		$this->dsn2->gender = 'P';
		$this->dsn2->pendidikan = 'S2';
		
		$this->load->model('Dosen_model', 'dsn3');
		$this->dsn3->id = 3;
		$this->dsn3->nidn = '100003';
		$this->dsn3->name = 'Purwoto';
		$this->dsn3->gender = 'L';
		$this->dsn3->pendidikan = 'S3';

		$list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
		$data['list_dsn'] = $list_dsn;

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('pages/dosen/index', $data);
		$this->load->view('layout/footer');
	}

}
