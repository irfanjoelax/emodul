<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model {

    private $_table = "pengaturan";

    // function untuk mengambil seluruh atau salah satu data pada table di dalam database
    public function get_data()
	{
        return $this->db->get($this->_table)->first_row();	
    }

    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'tambah') {
            return $this->db->insert($this->_table, $data);
        }
        elseif ($param == 'ubah') {
            return $this->db->update($this->_table, $data, array('idptr' => $id));
        }
		elseif ($param == 'hapus') {
            return $this->db->delete($this->_table, array('idptr' => $id));
        }
    }

}

/* End of file Pengaturan_model.php */
