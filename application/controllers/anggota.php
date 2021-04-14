<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anggota extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('Logged_in') == TRUE){
			redirect('Login');
		}
		}

	function index(){
		if($this->session->userdata('level') === 'anggota'){
			$this->load->view('anggota_view');
		}else{
			echo "access denided";
		}
	}



}