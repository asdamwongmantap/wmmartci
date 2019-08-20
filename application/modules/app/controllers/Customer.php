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

class Customer extends CI_Controller {
	function __construct(){
		parent::__construct();		
		// $this->load->library('Session');
		// $this->load->model('Muser');
		// $this->load->model('Modul_setting');
		// $this->load->model('Mmenu');
		 // $this->load->model('Modul_login');
		// $this->load->library('global_setting');
		$this->load->model('Modul_customer');
		$this->load->library('cart');
		
	}
	
	public function register()
	{
		
			$this->load->view('master/customer');
		
	}
	public function simpanregistrasi()
	{
		$datacust = array(
			
			'nama_lengkap' =>$this->input->post('nama_lengkap'),
			'password' =>md5($this->input->post('password')),
			'alamat' =>$this->input->post('alamat'),
			'email' =>$this->input->post('email'),
			'telpon' =>$this->input->post('telpon'),
			'id_kota' =>$this->input->post('kota'),
			'aktif' =>"Y"
			);
		
		$this->Modul_customer->get_insertcust($datacust);
		$sess_data['username'] = $this->input->post('email');
		$this->session->set_userdata($sess_data);
		redirect(base_url('app/transaksi/cart'));
	}
	public function login()
	{
		$this->load->view('login/frmlogin');
	}
	public function cek_login()
	{
		$data1 = array('email' => $this->input->post('user', TRUE),
						'password' => md5($this->input->post('password', TRUE))
		);
		$hasil = $this->Modul_customer->cek_user($data1);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['username'] = $sess->email;
				$this->session->set_userdata($sess_data);
				
			}
			redirect('app/main/dashboard');
		}else{
			echo "<script>alert('Username / Password yang anda gunakan salah !');
				window.history.go(-1);</script>";
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		
		session_destroy();
		redirect(base_url());
	}
	
}
