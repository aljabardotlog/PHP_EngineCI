<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Satuan extends CI_Model{
	//public $table = 'ref_agama';

	function get_data() {
		return $this->db->query("SELECT * FROM master_satuan");
	}

	function create($data){
		$this->db->insert("master_satuan" , $data);
	}

	function update($data, $where){
		$this->db->update("master_satuan", $data, $where);
	}

	function delete($where){
		$this->db->delete("master_satuan", $where);
	}

}