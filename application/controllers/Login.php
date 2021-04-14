<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		}

	public function index()
	{
		$this->load->view('login_view');
	}

	function auth(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$result   = $this->Login_model->check_user($username, $password);
		if($result->num_rows() > 0) {
			$data = $result->row_array();
			$name = $data['username'];
			$level = $data['level'];
			$userdata = array(
				'username' => $username,
				'level'	   => $level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			if($level== 'anggota'){
				redirect('anggota');
			} elseif ($level== 'petugas') {
				redirect('petugas');
			}else{
				redirect('Kepala');
			}
		}else{
			echo"<script>alert('access denied'):history-go(-1)</script>";
		}
		$this->load->view('login_view');
	

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
