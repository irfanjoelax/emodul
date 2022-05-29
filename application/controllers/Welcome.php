<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->model('materi_model');
        $this->load->model('submateri_model');
        $this->load->model('soal_model');
        $this->load->model('pengaturan_model');
	}
	
	/**
     * function untuk akses halaman awal pada setiap menu 'admin'
     */
    public function admin($menu='home',$id=null)
    {
        if ($menu == 'home') {
            $_90up = $this->user_model->nilai(90,100);
            $_80up = $this->user_model->nilai(80,90);
            $_70up = $this->user_model->nilai(70,80);
            $_60up = $this->user_model->nilai(60,70);
            $_50up = $this->user_model->nilai(0,60);

            $diagram = array(
                $_90up, $_80up, $_70up, $_60up, $_50up
            );

            $data = array(
                'total_materi'      => $this->materi_model->count(),
                'total_submateri'   => $this->submateri_model->count(),
                'total_soal'        => $this->soal_model->count(),
                'total_user'        => $this->user_model->count(),
                'materi'            => $this->materi_model->get_data(),
                'no'                => 1,
                'soal_aktif'        => $this->soal_model->count('aktif'),
                'soal_tidak_aktif'  => $this->soal_model->count('tidak aktif'),
                'diagram'           => $diagram
            );
            $this->load->view('backend/home', $data);
        }
        elseif ($menu == 'profil') {
            $this->load->view('backend/profil');
        }
        elseif ($menu == 'materi') {
            $this->load->view('backend/materi');
        }
        // menu untuk submateri
        elseif ($menu == 'submateri') {
            $this->load->view('backend/submateri');
        }
        elseif ($menu == 'submateri-tambah') {
            $data = array(
                'materi' => $this->materi_model->get_data()
            );
            $this->load->view('backend/submateri_tambah',$data);
        }
        elseif ($menu == 'submateri-ubah') {
            $data = array(
                'materi'     => $this->materi_model->get_data(),
                'submateri'  => $this->submateri_model->get_data($id),
            );
            $this->load->view('backend/submateri_ubah',$data);
        }
        // menu untuk soal
        elseif ($menu == 'soal') {
            $this->load->view('backend/soal');
        }
        elseif ($menu == 'soal-tambah') {
            $this->load->view('backend/soal_tambah');
        }
        elseif ($menu == 'soal-ubah') {
            $data = array(
                'soal' => $this->soal_model->get_data($id)
            );
            $this->load->view('backend/soal_ubah', $data);
        }
        // menu untuk pelajar atau user yang aktif dengan level 2
        elseif ($menu == 'user') {
            $this->load->view('backend/user');
        }
        // menu untuk setting halaman komptensti/ tujuan/ bantuan
        elseif ($menu == 'kompetensi') {
            $data = array(
                'pengaturan' => $this->pengaturan_model->get_data()
            );
            $this->load->view('backend/kompetensi', $data);
        }
    }
    
    /**
     * function untuk akses halaman awal pada setiap menu 'user/pelajar'
     */
    public function user($menu='home',$id=null)
    {
        if ($menu == 'home') {
            $this->load->view('frontend/home');
        }
        elseif ($menu == 'profil') {
            $this->load->view('frontend/profil');
        }
        elseif ($menu == 'kompetensi') {
            $data = array(
                'pengaturan'    => $this->pengaturan_model->get_data(),
            );
            $this->load->view('frontend/kompetensi', $data);
        }
        elseif ($menu == 'bantuan') {
            $data = array(
                'pengaturan'    => $this->pengaturan_model->get_data(),
            );
            $this->load->view('frontend/bantuan', $data);
        }
        elseif ($menu == 'materi') {
            $data = array(
                'materi' => $this->materi_model->get_data(),
            );
            $this->load->view('frontend/materi', $data);
        }
        // menu untuk submateri
        elseif ($menu == 'submateri') {
            $data = array(
                'materi'    => $this->materi_model->get_data($id),
                'submateri' => $this->materi_model->get_submateri($id),
            );
            $this->load->view('frontend/submateri',$data);
        }
        elseif ($menu == 'submateri-lihat') {
            $data = array(
                'submateri'  => $this->submateri_model->get_data($id),
            );
            $this->load->view('frontend/submateri_lihat',$data);
        }
        // menu untuk soal
        elseif ($menu == 'soal') {
            $data = array(
                'soal' => $this->soal_model->get_random()
            );
            $this->load->view('frontend/soal', $data);
        }
    }

    public function diagram()
    {
        $_90up = $this->user_model->nilai(90,100);
        $_80up = $this->user_model->nilai(80,90);
        $_70up = $this->user_model->nilai(70,80);
        $_60up = $this->user_model->nilai(60,70);
        $_50up = $this->user_model->nilai(0,60);

        $data = array(
            $_90up, $_80up, $_70up, $_60up, $_50up
        );

        echo $data;
    }
}
