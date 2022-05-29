<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
		$this->load->model("user_model");
	}
	
	// function untuk mengarahkan ke view login
	public function index()
	{
		$this->load->view('login');
	}

	// function untuk mengarahkan ke view register
	public function register()
	{
		$this->load->view('frontend/register');
	}

	public function daftar()
	{
		// masukkan data input post HTML ke dalam array
		$data = array(
			'nimusr'    => $this->input->post('txt_nim', TRUE), 
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
			'userusr'   => $this->input->post('txt_user', TRUE), 
			'passusr'   => md5($this->input->post('txt_pass1', TRUE)),  
			'lvlusr'    => 2,  
            'emailusr'  => $this->input->post('txt_email', TRUE), 
            'tlpusr'    => $this->input->post('txt_tlp', TRUE), 
            'almtusr'   => $this->input->post('txt_almt', TRUE),
            'nliusr'   => 0,
		);

		$this->user_model->action('tambah',$data);
        redirect(site_url('login'));
	}

	// function untuk melakukan proses login
	public function login()
	{
		// inisiasi variabel array untuk inputan post HTML
		$where = array(
			'userusr'   => $this->input->post('txt_user', TRUE), 
			'passusr'   => md5($this->input->post('txt_pass', TRUE))
		);

		// variabel untuk konek ke database dan cek login nya
		$cek 	= $this->user_model->get_where(null,$where)->num_rows();

		// variabel untuk menampung data session dari database
		$data	= $this->user_model->get_where(null,$where)->row();
		
		if ($cek == 1) {
			
			// pembuatan session dari data pada database dimasukkan dalam array
			$data_session = array(
				'idusr' 	=> $data->idusr,
				'nimusr' 	=> $data->nimusr,
				'namausr' 	=> $data->namausr,
				'userusr' 	=> $data->userusr,
				'lvlusr' 	=> $data->lvlusr,
				'emailusr' 	=> $data->emailusr,
				'tlpusr' 	=> $data->tlpusr,
				'almtusr' 	=> $data->almtusr,
				'status' 	=> "login"
			);
			
			// inisiasi session 
			$this->session->set_userdata($data_session);

			// ketika berhasil redirect ke halaman view home
			if ($data->lvlusr == 1) {
				redirect(site_url('welcome/admin/home'));
			} 
			elseif ($data->lvlusr == 2) {
				redirect(site_url('welcome/user/home'));
			}
		} 
		else {
			// redirect kembali ke halaman login karena proses gagal
			redirect(site_url('login'));
		}
	}

	// function logout dengan penghapusan session
	public function logout(){
		// penghapusan data session
		$this->session->sess_destroy();

		// redirect kembali ke halaman login
		redirect(site_url('login'));
	}	

	/**
	 * function untuk mengubah data profil admin yang login
	 */
	public function profil($id_user)
	{
		// data array jika input password post HTML kosong
		$data1 = array(
            'nimusr'    => $this->input->post('txt_nim', TRUE), 
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
            'userusr'   => $this->input->post('txt_user', TRUE), 
            'emailusr'  => $this->input->post('txt_email', TRUE), 
            'tlpusr'    => $this->input->post('txt_tlp', TRUE), 
            'almtusr'   => $this->input->post('txt_almt', TRUE), 
		);

		// data array jika input password post HTML tidak kosong
		$data2 = array(
			'nimusr'    => $this->input->post('txt_nim', TRUE), 
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
			'userusr'   => $this->input->post('txt_user', TRUE), 
			'passusr'   => md5($this->input->post('txt_pass', TRUE)),  
            'emailusr'  => $this->input->post('txt_email', TRUE), 
            'tlpusr'    => $this->input->post('txt_tlp', TRUE), 
            'almtusr'   => $this->input->post('txt_almt', TRUE),
		);

		// jika inputan post password kosong maka eksekusi array data1 jika tidak array data2
		if (empty($this->input->post('txt_pass'))) {
			$this->db->update('user', $data1, array('idusr' => $id_user));
		} else {
			$this->db->update('user', $data2, array('idusr' => $id_user));
		}

		// mengambil data dari database ditampung dalam variable untuk diparsing
		$data = $this->user_model->get_where($id_user);

		if ($data) {
			// pembuatan session dari data pada database dimasukkan dalam array
			$data_session = array(
				'idusr' 	=> $data->idusr,
				'nimusr' 	=> $data->nimusr,
				'namausr' 	=> $data->namausr,
				'userusr' 	=> $data->userusr,
				'lvlusr' 	=> $data->lvlusr,
				'emailusr' 	=> $data->emailusr,
				'tlpusr' 	=> $data->tlpusr,
				'almtusr' 	=> $data->almtusr,
				'status' 	=> "login"
			);
			
			// inisiasi session 
			$this->session->set_userdata($data_session);

			// ketika berhasil redirect ke halaman view home
			redirect(site_url('welcome/admin/home'));
		} 
		else {
			redirect(site_url('welcome/admin/profil'));
		}
	}
	
	/**
	 * function untuk mengubah data profil user yang login
	 */
	public function profil_user($id_user)
	{
		// data array jika input password post HTML kosong
		$data1 = array(
            'nimusr'    => $this->input->post('txt_nim', TRUE), 
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
            'userusr'   => $this->input->post('txt_user', TRUE), 
            'emailusr'  => $this->input->post('txt_email', TRUE), 
            'tlpusr'    => $this->input->post('txt_tlp', TRUE), 
            'almtusr'   => $this->input->post('txt_almt', TRUE), 
		);

		// data array jika input password post HTML tidak kosong
		$data2 = array(
			'nimusr'    => $this->input->post('txt_nim', TRUE), 
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
			'userusr'   => $this->input->post('txt_user', TRUE), 
			'passusr'   => md5($this->input->post('txt_pass', TRUE)),  
            'emailusr'  => $this->input->post('txt_email', TRUE), 
            'tlpusr'    => $this->input->post('txt_tlp', TRUE), 
            'almtusr'   => $this->input->post('txt_almt', TRUE),
		);

		// jika inputan post password kosong maka eksekusi array data1 jika tidak array data2
		if (empty($this->input->post('txt_pass'))) {
			$this->db->update('user', $data1, array('idusr' => $id_user));
		} else {
			$this->db->update('user', $data2, array('idusr' => $id_user));
		}

		// mengambil data dari database ditampung dalam variable untuk diparsing
		$data = $this->user_model->get_where($id_user);

		if ($data) {
			// pembuatan session dari data pada database dimasukkan dalam array
			$data_session = array(
				'idusr' 	=> $data->idusr,
				'nimusr' 	=> $data->nimusr,
				'namausr' 	=> $data->namausr,
				'userusr' 	=> $data->userusr,
				'lvlusr' 	=> $data->lvlusr,
				'emailusr' 	=> $data->emailusr,
				'tlpusr' 	=> $data->tlpusr,
				'almtusr' 	=> $data->almtusr,
				'status' 	=> "login"
			);
			
			// inisiasi session 
			$this->session->set_userdata($data_session);

			// ketika berhasil redirect ke halaman view home
			redirect(site_url('welcome/user/home'));
		} 
		else {
			redirect(site_url('welcome/user/profil'));
		}
	}
}