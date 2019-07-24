<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Toko extends CI_Model{
	//public $table = 'ref_agama';

	function get_data() {
		return $this->db->query("SELECT * FROM toko LIMIT 1");
	}

	function update($data, $where){
		$this->db->update("toko", $data, $where);
	}

}