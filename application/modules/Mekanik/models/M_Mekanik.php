<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mekanik extends CI_Model{
	//public $table = 'ref_agama';

	function get_data() {
		return $this->db->query("SELECT * FROM master_mekanik");
	}

	function create($data){
		$this->db->insert("master_mekanik" , $data);
	}

	function update($data, $where){
		$this->db->update("master_mekanik", $data, $where);
	}

	function delete($where){
		$this->db->delete("master_mekanik", $where);
	}

}