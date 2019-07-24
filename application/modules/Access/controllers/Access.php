<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
	
	public function index(){
		$this->load->library('slice');
		$this->load->helper('url');
		$this->slice->view('access');
	}
}
