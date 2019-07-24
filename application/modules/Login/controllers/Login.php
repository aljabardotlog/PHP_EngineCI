<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
	    parent::__construct();
	    $this->load->library('slice');
		$this->load->helper('url');
	    $this->load->model('M_Login');
	}
	
	public function index() {
		if ($this->input->post('email')) {
			$a = $this->input->post('email');
			$b = $this->input->post('password');
			
			$cek_login = $this->M_Login->Cek_Login($a, $b);
			if (!empty($cek_login)) {
				$data = array(
                            'login' => 'ok',
                            'kd_user' => $cek_login->kd_user,
                            'nama_user' => $cek_login->nama,
                            'kd_user_group' => $cek_login->kd_user_group                  
                	);
        	$this->session->set_userdata($data);    
        	echo 'Dashboard';
        	}
		} else if ($this->session->userdata('login')=='ok') {
			redirect('Dashboard');
		} else {
			$this->slice->view('login');
		}
	}

	public function Logout() {
		$this->session->sess_destroy();
		$this->index();
	}

}
