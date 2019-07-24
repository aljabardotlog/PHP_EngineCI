<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model {
	
	function Cek_Menu($nama_menu) {
		$kd_user = $this->session->userdata('kd_user');
		$sql1 = $this->db->query("SELECT a.* FROM menu a JOIN menu_user b WHERE b.kd_user='$kd_user' AND a.name='$nama_menu' AND a.kd_menu=b.kd_menu")->row();
		if (count($sql1)==1) {
			return true;
		} else if ($sql1==null) {
			$sql2 = $this->db->query("SELECT a.* FROM menu_sub a JOIN menu_user b WHERE b.kd_user='$kd_user' AND a.name='$nama_menu' AND a.kd_menu_sub=b.kd_menu_sub")->row();
			if (count($sql2)==1) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
		//return $sql1->row();
	}

 
}