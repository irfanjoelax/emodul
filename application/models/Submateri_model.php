<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Submateri_model extends CI_Model {

    private $_table = "submateri";

    // function untuk mengambil seluruh atau salah satu data pada table di dalam database
    public function get_data($id=null)
	{
        if ($id == null) {
            $this->db->select('*')->from($this->_table)->join('materi','materi.idmtr=submateri.mtrid');
		    return $this->db->order_by('idsubmtr','DESC')->get()->result();
        }
        else {
            $this->db->select('*')->from($this->_table)->join('materi','materi.idmtr=submateri.mtrid');
            return $this->db->where('idsubmtr',$id)->get()->row();
        }
		
    }

    // function untuk mengambil data submateri
    public function get_count($id)
    {
        $this->db->select('*')->from($this->_table)->join('materi','materi.idmtr=submateri.mtrid');
        return $this->db->where('submateri.mtrid',$id)->get()->num_rows();
    }

    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'tambah') {
            return $this->db->insert($this->_table, $data);
        }
        elseif ($param == 'ubah') {
            return $this->db->update($this->_table, $data, array('idsubmtr' => $id));
        }
		elseif ($param == 'hapus') {
            return $this->db->delete($this->_table, array('idsubmtr' => $id));
        }
    }

    public function hitung()
    {
        $this->db->select('*')->from($this->_table)->join('materi','materi.idmtr=submateri.mtrid');
		return $this->db->order_by('idsubmtr','DESC')->get()->num_rows();
    }

    // function untuk menghitung berapa jumlah data
    public function count($id=null)
    {
        if ($id == null) {
            return $this->db->get($this->_table)->num_rows();
        }
        else {
            return $this->db->where('mtrid',$id)->get($this->_table)->num_rows();
        }
    }
}

/* End of file Submateri_model.php */
