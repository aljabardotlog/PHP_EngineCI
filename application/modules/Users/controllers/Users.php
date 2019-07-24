<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public $nama_menu = 'Setting';

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('login')!='ok') {
    	redirect(base_url());
    	} else {
    		$this->load->model('M_Menu');
		    $cek = $this->M_Menu->Cek_Menu($this->nama_menu);
		    if ($cek==true) {
		    	$this->load->model('M_Users');
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
						'sub_menu_aktif' => 'Manage Users',
						'get_user' => $this->M_Users->get_user()->result()
						);
		$this->slice->view('users', $data);
	}

	public function Simpan_Data(){
		if ($this->M_Users->Simpan_Data()==true) {
		$this->session->set_flashdata("notif", "tambah");
		}
		redirect('Users');
	}

	public function Update_Menu() {
		$kd_user = $this->input->post('nip');
		$this->db->query("DELETE FROM menu_user WHERE kd_user='$kd_user'");
		$b = $this->input->post('menu[]');
		$count1 = count($b);
		for ($no1=0; $no1 < $count1; $no1++) { 
			$b[$no1];
			$sql1 = $this->db->query("SELECT * FROM menu WHERE kd_menu='$b[$no1]' AND class!='0'");
			foreach ($sql1->result() as $key1) {
				$this->db->query("INSERT INTO menu_user VALUES ('','$kd_user','$key1->kd_menu','0')");
			}
		}

		
		$a = $this->input->post('menu_sub[]');
		$count = count($a);
		for ($no=0; $no < $count; $no++) { 
			$sql2 = $this->db->query("SELECT * FROM menu_sub WHERE kd_menu_sub='$a[$no]'");
			foreach ($sql2->result() as $key2) {
				$this->db->query("INSERT INTO menu_user VALUES ('','$kd_user','$key2->kd_menu','$key2->kd_menu_sub')");
			}
		}
		$this->session->set_flashdata("notif", "ubah");
		redirect('Users');
	}
}
