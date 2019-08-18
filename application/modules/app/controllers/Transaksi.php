<!-- 
|--------------------------------------------------------------------------
| Controller Main
|--------------------------------------------------------------------------
|
| @params	user		session username login
|			password	session password login
|			generalcode	parameter input for general setting
|  
-->
<?php 
// error_reporting(0); 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		// $this->load->library('Session');
		// $this->load->model('Muser');
		// $this->load->model('Modul_setting');
		// $this->load->model('Mmenu');
		 // $this->load->model('Modul_login');
		// $this->load->library('global_setting');
		// $this->load->model('Modul_product');
		$this->load->library('cart');
		
	}
	public function addcart()
	{
		$items = array(
			'id'      => $this->input->post('kd_brg'),
			'qty'     => 1,
			'price'   => $this->input->post('harga'),
			'name'    => $this->input->post('nm_brg'),
			'options' => array('img' => $this->input->post('gambar'))
		);
	
		$this->cart->insert($items);
		redirect('', 'refresh');
		
	}
	public function cart()
	{
		$data['datacart'] = $this->cart->contents();
		// print_r($this->cart->contents());die;
		$this->load->view('transaksi/keranjang',$data);
		
		
	}
	public function deletecart()
	{
		$items = array(
			'rowid' => $this->uri->segment(4),
			'qty'	=> '0',
			'price'	=> '0',
			'name'	=> '',
			'options' => ''
		);
		$this->cart->update($items);
		redirect(base_url('app/transaksi/cart'), 'refresh');
		
	}
	
}
