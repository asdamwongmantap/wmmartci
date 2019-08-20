<?php 
	Class Modul_customer extends CI_Model {
		
	
	var $tbl_customer='kustomer';


	public function get_insertcust($datacust){
		// $this->load->database();
       $this->db->insert($this->tbl_customer, $datacust);
       return TRUE;
	}
	public function cek_user($data1) {
		$query = $this->db->get_where('kustomer', $data1);
		return $query;
	}
	
	
	
}