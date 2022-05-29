<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Submateri extends CI_Controller {

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
        $this->load->model('submateri_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->submateri_model->get_data();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = $list->namasubmtr;
            $row[]  = '<center>'.$list->namamtr.'</center>';
            $row[]  = '
                <center>
                    <a href="'.site_url('welcome/admin/submateri-ubah/').$list->idsubmtr.'" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit fa-sm"></i>
                    </a>
                    <button onclick="deleteData('.$list->idsubmtr.')"  class="btn btn-sm btn-danger">
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
     * function untuk INSERT, UPDATE, DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function jalankan($param, $id=null)
    {
        // masukkan data input post HTML ke dalam array
        $data = array(
            'namasubmtr'    => ucwords($this->input->post('txt_nama',TRUE)),
            'mtrid'         => $this->input->post('txt_mtr',TRUE),
            'isisubmtr'     => $this->input->post('txt_isi',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'tambah') {
            // insert dari controller ke model untuk dieksekusi
            $result = $this->submateri_model->action('tambah',$data);
            redirect(site_url('welcome/admin/submateri'));
        }
        elseif ($param == 'ubah') {
            // update dari controller ke model untuk dieksekusi
            $result = $this->submateri_model->action('ubah',$data,$id);
            redirect(site_url('welcome/admin/submateri'));
        }
        elseif ($param == 'hapus') {
            // delete dari controller ke model untuk dieksekusi
            $this->submateri_model->action('hapus',array(),$id);
        }
    }

}

/* End of file Submateri.php */
