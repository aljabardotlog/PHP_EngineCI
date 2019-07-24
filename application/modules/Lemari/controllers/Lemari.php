<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari extends CI_Controller {

	public $nama_menu = 'Lemari';


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
			$this->load->model('M_Lemari');
		} else {
			redirect('Access');
		}
		}
	}
	
	public function index(){
		$data = array(
						'menu_aktif' => 'Master',
						'sub_menu_aktif' => $this->nama_menu,
						'get_data' => $this->M_Lemari->get_data()->result()
						);
		$this->slice->view('lemari', $data);
	}

	function add(){
		if($this->input->post('a')){
			$data = array(
				'nm_lemari' => $this->input->post('a')
			);
			$this->M_Lemari->create($data);
			$this->session->set_flashdata("notif", "tambah");
			redirect(base_url('lemari'));
		}
		redirect(base_url('lemari'));
	}

	function edit(){
		if($this->input->post('a') && $this->input->post("kode")){
			$where = array(
				"kd_lemari" => $this->input->post('kode')
			);

			$data = array(
				'nm_lemari' => $this->input->post('a')
			);
			$this->M_Lemari->update($data, $where);
			$this->session->set_flashdata("notif", "ubah");
		}
		redirect(base_url('lemari'));
	}

	function Delete($kode){
		if($kode){
			$where = array(
				"kd_lemari" => $kode
			);
			$this->M_Lemari->delete($where);
			$this->session->set_flashdata("notif", "hapus");
		}
		redirect(base_url('lemari'));
	}
}
