<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model {

    private $_table = "soal";

    // function untuk mengambil seluruh atau salah satu data pada table di dalam database
    public function get_data($id=null)
	{
        if ($id == null) {
		    return $this->db->order_by('idsoal','DESC')->get($this->_table)->result();
        }
        else {
            return $this->db->where('idsoal',$id)->get($this->_table)->row();
        }
		
    }

    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'tambah') {
            return $this->db->insert($this->_table, $data);
        }
        elseif ($param == 'ubah') {
            return $this->db->update($this->_table, $data, array('idsoal' => $id));
        }
		elseif ($param == 'hapus') {
            return $this->db->delete($this->_table, array('idsoal' => $id));
        }
    }

    // function untuk mengambil data pada table di dalam database secara random
    public function get_random()
	{
		return $this->db->where('aktfsoal',1)->order_by('idsoal','RANDOM')->get($this->_table);
    }

    // function untuk menghitung berapa jumlah data
    public function count($param=null)
    {
        if ($param == null) {
            return $this->db->get($this->_table)->num_rows();
        }
        elseif ($param == 'aktif') {
            return $this->db->where('aktfsoal',1)->get($this->_table)->num_rows();
        }
        elseif ($param == 'tidak aktif') {
            return $this->db->where('aktfsoal',2)->get($this->_table)->num_rows();
        }
    }
}

/* End of file Soal_model.php */
