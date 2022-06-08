<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{

    public function index()
    {
        $this->load->model('Matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->kode = 'MK0001';
        $this->mk1->name = 'Pemrograman Web';
        $this->mk1->sks = '3';

        $this->load->model('Matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->kode = 'MK0002';
        $this->mk2->name = 'Basis Data';
        $this->mk2->sks = '4';

        $this->load->model('Matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->kode = 'MK0003';
        $this->mk3->name = 'UI/UX';
        $this->mk3->sks = '3';

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk'] = $list_mk;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pages/matakuliah/index', $data);
        $this->load->view('layout/footer');
    }
}
