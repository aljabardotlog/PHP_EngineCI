<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $nama_menu = 'Dashboard';
	
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('login')!='ok') {
    	redirect(base_url());
    	} else {
	    	
	    	$this->load->model('M_Menu');
	    	$cek = $this->M_Menu->Cek_Menu($this->nama_menu);
	    	if ($cek==true) {
				$this->load->library('slice');
				$this->load->helper('url');
			} else {
				redirect('Access');
			}
		}
	}
	
	public function index(){
		$data = array(
						'menu_aktif' => $this->nama_menu,
						'sub_menu_aktif' => '0'
						);
		$this->slice->view('dashboard', $data);
	}
}
