<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mekanik extends CI_Controller {

	public $nama_menu = 'Mekanik';


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
			$this->load->model('M_Mekanik');
		} else {
			redirect('Access');
		}
		}
	}
	
	public function index(){
		$data = array(
						'menu_aktif' => 'Master',
						'sub_menu_aktif' => $this->nama_menu,
						'get_data' => $this->M_Mekanik->get_data()->result()
						);
		$this->slice->view('mekanik', $data);
	}

	function Add(){
		if($this->input->post('a')){
			$data = array(
				'kd_mekanik' => $this->input->post('a'),
				'nm_mekanik' => $this->input->post('b'),
				'alamat' => $this->input->post('c'),
				'telp' => $this->input->post('d'),
				'ket' => $this->input->post('e')
			);
			$this->M_Mekanik->create($data);
			$this->session->set_flashdata("notif", "tambah");
			redirect(base_url('mekanik'));
		}
		redirect(base_url('mekanik'));
	}

	function Edit(){
		if($this->input->post('a') && $this->input->post("a")){
			$where = array(
				"kd_mekanik" => $this->input->post('kode')
			);

			$data = array(
				'nm_mekanik' => $this->input->post('b'),
				'alamat' => $this->input->post('c'),
				'telp' => $this->input->post('d'),
				'ket' => $this->input->post('e')
			);
			$this->M_Mekanik->update($data, $where);
			$this->session->set_flashdata("notif", "ubah");
		}
		redirect(base_url('mekanik'));
	}

	function Delete($kode){
		if($kode){
			$where = array(
				"kd_mekanik" => $kode
			);
			$this->M_Mekanik->delete($where);
			$this->session->set_flashdata("notif", "hapus");
		}
		redirect(base_url('mekanik'));
	}
}
