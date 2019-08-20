<?php 
	Class Modul_transaksi extends CI_Model {
		
	var $tbl_order='orders';
	var $tbl_orderdetail='orders_detail';

	
	public function get_insertorder($data){
		// $this->load->database();
	   $this->db->insert($this->tbl_order, $data);
	   $insertId = $this->db->insert_id();
       return $insertId;
    }
	public function get_insertorderdetail($datadetail){
		// $this->load->database();
       $this->db->insert($this->tbl_orderdetail, $datadetail);
       return TRUE;
    }
	
	
	
}