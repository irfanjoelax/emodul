<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $this->load->model('user_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->user_model->get_user();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = '<center>'.$list->namausr.'</center>';
            $row[]  = '<center>'.$list->userusr.'</center>';
            $row[]  = '<center>'.$list->nliusr.'</center>';
            $row[]  = '
                <center>
                    <button onclick="getData('.$list->idusr.')"  class="btn btn-sm btn-success">
                        <i class="fas fa-eye fa-sm"></i>
                    </button>
                    <button onclick="deleteData('.$list->idusr.')"  class="btn btn-sm btn-danger">
                        <i class="fas fa-trash fa-sm"></i>
                    </button>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    /**
     * function untuk DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function jalankan($param, $id=null)
    {
        if ($param == 'hapus') {
            // delete dari controller ke model untuk dieksekusi
            $this->user_model->action('hapus',array(),$id);
        }
        elseif ($param == 'lihat') {
            // untuk melihat data diambil dari model get_data atau get_user
            $lihat = $this->user_model->get_user($id);
            echo json_encode($lihat);
        }
    }

}

/* End of file User.php */
