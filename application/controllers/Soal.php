<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

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
        $this->load->model('soal_model');
        $this->load->model('user_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->soal_model->get_data();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = substr($list->tnysoal, 0, 200);
            if ($list->aktfsoal == 1) {
                $row[]  = '<center><p style="color: blue">Aktif</p></center>';
            }
            else {
                $row[]  = '<center><p style="color: red">Tidak Aktif</p></center>';
            }
            $row[]  = '
                <center>
                    <a href="'.site_url('welcome/admin/soal-ubah/').$list->idsoal.'" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit fa-sm"></i>
                    </a>
                    <button onclick="deleteData('.$list->idsoal.')"  class="btn btn-sm btn-danger">
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
        $data1 = array(
            'tnysoal'   => ucfirst($this->input->post('txt_tny',TRUE)),
            'asoal'     => $this->input->post('txt_a',TRUE),
            'bsoal'     => $this->input->post('txt_b',TRUE),
            'csoal'     => $this->input->post('txt_c',TRUE),
            'dsoal'     => $this->input->post('txt_d',TRUE),
            'esoal'     => $this->input->post('txt_e',TRUE),
            'gmbrsoal'  => $this->upload_image(),
            'kncsoal'   => $this->input->post('txt_knc',TRUE),
            'aktfsoal'  => $this->input->post('txt_aktf',TRUE),
        );

        $data2 = array(
            'tnysoal'   => ucfirst($this->input->post('txt_tny',TRUE)),
            'asoal'     => $this->input->post('txt_a',TRUE),
            'bsoal'     => $this->input->post('txt_b',TRUE),
            'csoal'     => $this->input->post('txt_c',TRUE),
            'dsoal'     => $this->input->post('txt_d',TRUE),
            'esoal'     => $this->input->post('txt_e',TRUE),
            'kncsoal'   => $this->input->post('txt_knc',TRUE),
            'aktfsoal'  => $this->input->post('txt_aktf',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'tambah') {
            // insert dari controller ke model untuk dieksekusi
            $this->soal_model->action('tambah',$data1);
            redirect(site_url('welcome/admin/soal'));
        }
        elseif ($param == 'ubah') {
            // jika inputan post file gambar tidak kosong
            if (!empty($_FILES["txt_gmbr"]["name"])) {
                // mengambil data terpilih dari database
                $row = $this->soal_model->get_data($id);

                // menghapus gambar dari data yang terpilih
                unlink("./backend/soal/$row->gmbrsoal");

                $this->soal_model->action('ubah',$data1,$id);
            }
            // jika inputan post file gambar kosong
            else {
                $this->soal_model->action('ubah',$data2,$id);
            }

            redirect(site_url('welcome/admin/soal'));
        }
        elseif ($param == 'hapus') {
            // mengambil data terpilih dari database
            $row = $this->soal_model->get_data($id);

            // menghapus gambar dari data yang terpilih
            unlink("./backend/soal/$row->gmbrsoal");

            // delete dari controller ke model untuk dieksekusi
            $this->soal_model->action('hapus',array(),$id);
        }
    }

    /**
     * function membuat upload image yang hanya dapat diakses di dalam class ini
     * dan terdapat fitur untuk compress ukuran pixel gambar
     *  */ 
    public function upload_image()
	{
		$config['upload_path']          = './backend/soal';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		
	    if ($this->upload->do_upload('txt_gmbr')) {
			$gbr = $this->upload->data();
			
			// config compress image
			$config['image_library']='gd2';
			$config['source_image']='./backend/soal/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 400;
			$config['height']= 400;
            $config['new_image']= './backend/soal/'.$gbr['file_name'];
            
            // load library resize codeigniter
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

	        return $this->upload->data("file_name");
		}
    }
    
    /**
     * function untuk INSERT, UPDATE, DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function dihitung()
    {
        $pilihan    = $this->input->post('pilihan',TRUE);
		$id_soal    = $this->input->post('id',TRUE);
		$jumlah     = $this->input->post('jumlah',TRUE);
 
		$score = 0;
		$benar = 0;
		$salah = 0;
		$kosong = 0;

        for($i=0;$i<$jumlah;$i++){
			$nomor = $id_soal[$i]; // id nomor soal
 
			// jika user tidak memilih jawaban
			if(empty($pilihan[$nomor])){
				$kosong++;
            } 
            else {
				// jika memilih
				$jawaban = $pilihan[$nomor];
 
                // cocokan jawaban dengan yang ada didatabase
                $where = array(
                    'idsoal' => $nomor,
                    'kncsoal' => $jawaban,
                );
				$cek = $this->db->where($where)->get('soal')->num_rows();
 
				if($cek){
					// jika jawaban cocok (benar)
					$benar++;
				} else {
					// jika salah
					$salah++;
				}
 
			}
 
			$jumlah_soal = $this->db->where('aktfsoal',1)->get('soal')->num_rows();
			$score = 100 / $jumlah_soal * $benar;            
        }
        
        
        $id     = $this->session->userdata('idusr');
        $user   = $this->user_model->get_user($id);

        // jika nilai lebih besar maka nilai user atau pelajar dirubah 
        if (number_format($score) > $user->nliusr) {
            $this->db->update('user', array('nliusr' => number_format($score)), array('idusr' => $id));
        }

        $user2   = $this->user_model->get_user($id);

        // redirect kehalaman hasil 
        $data = array(
            'jumlah_soal'       => $jumlah_soal,
            'benar'             => $benar,
            'salah'             => $salah,
            'kosong'            => $kosong,
            'nilai_tertinggi'   => $user2->nliusr,
            'score'             => number_format($score),
        );

        $this->load->view('frontend/hasil', $data);
    }
}

/* End of file Soal.php */
