<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

    /**
	 * function untuk pertama kali di jalankan saat class ini dijalankan
	 */
	public function __construct()
	{
		parent::__construct();

        // pengecekan apakah status session sedang login ?
        if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
        }
        
        // load model yang digunakan
        $this->load->model('pengaturan_model');
    }

    /**
     * function untuk INSERT, UPDATE, DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function jalankan($param, $id=null)
    {
        // masukkan data input post HTML ke dalam array
        $data = array(
            'kmptnsiptr'    => $this->input->post('txt_kmptnsi',TRUE),
            'tjnptr'        => $this->input->post('txt_tjn',TRUE),
            'bntnptr'       => $this->input->post('txt_bntn',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'ubah') {
            // update dari controller ke model untuk dieksekusi
            $result = $this->pengaturan_model->action('ubah',$data,$id);
        }

        // ketika berhasil redirect ke halaman view home
        if ($result) {
            redirect(site_url('welcome/admin/home'));
        }
    }
}

/* End of file Pengaturan.php */
