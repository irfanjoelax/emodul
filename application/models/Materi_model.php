<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_model extends CI_Model {

    private $_table = "materi";

    // function untuk mengambil seluruh atau salah satu data pada table di dalam database
    public function get_data($id=null)
	{
        if ($id == null) {
            return $this->db->order_by('idmtr','DESC')->get($this->_table)->result();
        }
        else {
            return $this->db->where('idmtr',$id)->get($this->_table)->row();
        }
    }
    
    // function untuk mengambil data submateri
    public function get_submateri($id)
    {
        $this->db->select('*')->from($this->_table)->join('submateri','submateri.mtrid=materi.idmtr');
        return $this->db->where('submateri.mtrid',$id)->get()->result();
    }

    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'tambah') {
            return $this->db->insert($this->_table, $data);
        }
        elseif ($param == 'ubah') {
            return $this->db->update($this->_table, $data, array('idmtr' => $id));
        }
		elseif ($param == 'hapus') {
            return $this->db->delete($this->_table, array('idmtr' => $id));
        }
    }

    // function untuk menghitung berapa jumlah data
    public function count($id=null)
    {
        return $this->db->get($this->_table)->num_rows();
    }

}

/* End of file Materi_model.php */
