<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {


	public $nama_menu = 'Satuan';


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
			$this->load->model('M_Satuan');
		} else {
			redirect('Access');
		}
		}
	}

	
	public function index(){
		$data = array(
						'menu_aktif' => 'Master',
						'sub_menu_aktif' => $this->nama_menu,
						'get_data' => $this->M_Satuan->get_data()->result()
						);
		$this->slice->view('satuan', $data);
	}

	function add(){
		if($this->input->post('a')){
			$data = array(
				'satuan' => $this->input->post('a')
			);
			$this->M_Satuan->create($data);
			$this->session->set_flashdata("notif", "tambah");
			redirect(base_url('satuan'));
		}
		redirect(base_url('satuan'));
	}

	function edit(){
		if($this->input->post('a') && $this->input->post("kode")){
			$where = array(
				"kd_satuan" => $this->input->post('kode')
			);

			$data = array(
				'satuan' => $this->input->post('a')
			);
			$this->M_Satuan->update($data, $where);
			$this->session->set_flashdata("notif", "ubah");
		}
		redirect(base_url('satuan'));
	}

	function Delete($kode){
		if($kode){
			$where = array(
				"kd_satuan" => $kode
			);
			$this->M_Satuan->delete($where);
			$this->session->set_flashdata("notif", "hapus");
		}
		redirect(base_url('satuan'));
	}
}
