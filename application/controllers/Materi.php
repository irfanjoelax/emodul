<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

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
        $this->load->model('materi_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->materi_model->get_data();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = $list->namamtr;
            $row[]  = '
                <center>
                    <button onclick="getData('.$list->idmtr.')"  class="btn btn-sm btn-warning">
                        <i class="fas fa-edit fa-sm"></i>
                    </button>
                    <button onclick="deleteData('.$list->idmtr.')"  class="btn btn-sm btn-danger">
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
     * function untuk akses view tambah dan ubah 
     */
    public function aksi($param, $id=null)
    {
        if ($param == "tambah") {
            $this->load->view('admin/kategori/tambah');
        }
        elseif ($param == "ubah") {
            echo json_encode($this->materi_model->get_data($id));
        }
    }

    /**
     * function untuk INSERT, UPDATE, DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function jalankan($param, $id=null)
    {
        // masukkan data input post HTML ke dalam array
        $data = array(
            'namamtr'      => ucwords($this->input->post('txt_nama',TRUE))
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'tambah') {
            // insert dari controller ke model untuk dieksekusi
            $result = $this->materi_model->action('tambah',$data);
        }
        elseif ($param == 'ubah') {
            // update dari controller ke model untuk dieksekusi
            $result = $this->materi_model->action('ubah',$data,$id);
        }
        elseif ($param == 'hapus') {
            // delete dari controller ke model untuk dieksekusi
            $this->materi_model->action('hapus',array(),$id);
        }

        // ketika berhasil redirect ke halaman view home
        if ($result) {
            redirect(site_url('welcome/admin/materi'));
        }
    }

}

/* End of file Materi.php */
