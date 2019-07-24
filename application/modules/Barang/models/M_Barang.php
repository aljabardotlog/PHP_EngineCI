<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Barang extends CI_Model{
	//public $table = 'ref_agama';

	function get_data() {
		return $this->db->query("SELECT * FROM master_lemari");
	}

	function create($data){
		$this->db->insert("master_lemari" , $data);
	}

	function update($data, $where){
		$this->db->update("master_lemari", $data, $where);
	}

	function delete($where){
		$this->db->delete("master_lemari", $where);
	}

}