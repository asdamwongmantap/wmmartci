<?php 
	Class Modul_product extends CI_Model {

		
	public function get_listproduct($number,$offset)
	{
		$query=$this->db->get('barang',$number,$offset);
		if ($query->num_rows()>0)
		{
			return $query->result();
		}
			else
		{
			return array();
		}
	}
	public function jumlah_data(){
		return $this->db->get('barang')->num_rows();
	}
		
}