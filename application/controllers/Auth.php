<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load model
		$this->load->model('Auth_model', 'auth');
	}

    public function login()
    {
        $this->load->view('auth/login');
    }

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function signin()
	{
		// Get data post
		$data_post = $this->input->post();

		// Set data
		$data['username'] = $data_post['username'];
		$data['password'] = $data_post['password'];

		// Call authentication function
		$user = $this->auth->authentication($data);

		if (isset($user)) {
			// Set session
			$this->session->set_userdata('USERNAME', $user->username);
			$this->session->set_userdata('ROLE', $user->role);
			$this->session->set_userdata('is_login', true);
			$this->session->set_flashdata('login_success', 'true');
			
			redirect(base_url('home/admin'));
		} else {
			$this->session->set_flashdata('login_success', 'false');
			redirect(base_url('auth/login'));
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth/login'));
	}
}
