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
error_reporting(1); 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();		
		// $this->load->library('Session');
		// $this->load->model('Muser');
		// $this->load->model('Modul_setting');
		// $this->load->model('Mmenu');
		 // $this->load->model('Modul_login');
		// $this->load->library('global_setting');
		$this->load->model('Modul_product');
		
	}
	
	public function dashboard()
	{
		$jumlah_data = $this->Modul_product->jumlah_data();
		$config['base_url'] = base_url().'app/main/dashboard/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 8;
		$from = $this->uri->segment(4,0);
		// Membuat Style pagination untuk BootStrap v4
		$config['next_link'] = 'Selanjutnya';
		$config['prev_link'] = 'Sebelumnya';
		$config['first_link'] = 'Awal';
		$config['last_link'] = 'Akhir';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="'.base_url().'app/main/dashboard/'.'">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_open'] = '<li>';
		$this->pagination->initialize($config);		
		$data['databrg'] = $this->Modul_product->get_listproduct($config['per_page'],$from);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('dashboard/dashboard',$data);
		
		
	}
	
}
