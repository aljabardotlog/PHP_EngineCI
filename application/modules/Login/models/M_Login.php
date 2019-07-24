<?php

Class M_Login extends CI_Model {
	function Cek_Login($a, $b) {
		$a = $a;
        $b = md5($b);
		$sql1 = $this->db->query("SELECT a.* 
                                    FROM adl_user a
                                    WHERE username='$a' 
                                    AND password='$b'");
		return $sql1->row();
	}

}
?>