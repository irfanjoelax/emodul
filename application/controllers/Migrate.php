<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

    /**
     * function construct untuk dijalankan pertama kali
     */

    public function __construct()
    {
        parent::__construct();

        // load library yang digunakan
        $this->load->library('migration');
        
    }

    /**
     * function untuk migration sesuai dengan version pada url browser
     */
    public function version($ver)
    {
        if ($this->migration->version($ver) === FALSE) {
            show_error($this->migration->error_string());
        }
        else {
            echo 'Migration Successfully For Sequential Version : '.$ver;
        }
    }

    /**
     * function untuk membuat dummy data untuk data user
     */
    public function seeder()
    {
        $data_user1 = array(
            'nimusr'    => 'admin', 
            'namausr'   => 'admin', 
            'userusr'   => 'admin', 
            'passusr'   => md5('admin'), 
            'lvlusr'    => 1, 
            'emailusr'  => 'admin@admin.com', 
            'tlpusr'    => '08115544412', 
            'almtusr'   => 'jalan kantor aja wal', 
        );

        $data_user2 = array(
            'nimusr'    => '150105011', 
            'namausr'   => 'muhammad irfan permana', 
            'userusr'   => 'irfan', 
            'passusr'   => md5('irfan'), 
            'lvlusr'    => 2, 
            'emailusr'  => 'irfan@irfan.com', 
            'tlpusr'    => '08115544266', 
            'almtusr'   => 'jalan rapak indah', 
        );
        
        $this->db->insert('user', $data_user1);
        $this->db->insert('user', $data_user2);
        echo 'Seeder Successfully';
    }
}

/* End of file Migrate.php */
