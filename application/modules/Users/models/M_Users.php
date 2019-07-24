<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends CI_Model{

function get_user() {
	return $this->db->query("SELECT * FROM adl_user");
}

function Simpan_Data() {
	$nip = $this->input->post('nip');
	$user = $this->input->post('user');
	$pass = md5($this->input->post('pass'));

	$nama = $this->db->query("SELECT nama_peg FROM data_peg WHERE id_peg='$nip'")->row();
	return $this->db->query("INSERT INTO adl_user VALUES ('$nip','0','$user','$pass','$nama->nama_peg','','','1')");
}
	 
}