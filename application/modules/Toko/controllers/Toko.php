<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public $nama_menu = 'Toko';


	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('login')!='ok') {
    	redirect('Login');
    	} else {
	    $this->load->model('M_Menu');
	    $cek = $this->M_Menu->Cek_Menu($this->nama_menu);
	    if ($cek==true) {		
			$this->load->library('slice');
			$this->load->helper('url');
			$this->load->model('M_Toko');
		} else {
			redirect('Access');
		}
		}
	}
	
	public function index(){
		$data = array(
						'menu_aktif' => 'Setting',
						'sub_menu_aktif' => $this->nama_menu,
						'get_data' => $this->M_Toko->get_data()->row()
						);
		$this->slice->view('toko', $data);
	}

	function Edit(){
		if($this->input->post('a')){
			$where = array(
				"kd_toko" => $this->input->post('a')
			);

			$data = array(
				'nm_toko' => $this->input->post('b'),
				'alamat' => $this->input->post('c'),
				'telp' => $this->input->post('d')
			);
			$this->M_Toko->update($data, $where);
			$this->session->set_flashdata("notif", "ubah");
		}
		redirect(base_url('toko'));
	}
	
}
