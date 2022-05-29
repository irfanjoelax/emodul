<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // variabel yang hanya dapat diakses pada model ini
	private $_table 	= "user";

	/**
     * function untuk mengambil data berdasarkan kondisi WHERE tertentu
     * untuk model pada login
     */
	public function get_where($id, $data=array())
	{
        if ($id == null) {
            return $this->db->get_where($this->_table, $data);
        }
        else {
            return $this->db->get_where($this->_table,array('idusr' => $id))->row();
        }
	}

    // function untuk mengambil seluruh atau salah satu data pada table di dalam database
    public function get_data($id=null)
	{
        if ($id == null) {
            return $this->db->order_by('idusr','DESC')->get($this->_table)->result();
        }
        else {
            return $this->db->where('idusr',$id)->get($this->_table)->row();
        }
		
    }

    // function untuk mengambil seluruh atau salah satu data pada table di dalam database sebagai dummy data admin
    public function get_user($id=null)
    {
        if ($id == null) {
            return $this->db->order_by('idusr','DESC')->where('lvlusr',2)->get($this->_table)->result();
        }
        else {
            return $this->db->where('idusr',$id)->get($this->_table)->row();
        }
    }

    // function untuk insert, update, atau delete data ke dalam database
    public function action($param,$data=array(),$id=null)
	{
        if ($param == 'tambah') {
            return $this->db->insert($this->_table, $data);
        }
		elseif ($param == 'hapus') {
            return $this->db->delete($this->_table, array('idusr' => $id));
        }
    }

    // function untuk menghitung berapa jumlah data
    public function count($id=null)
    {
        return $this->db->where('lvlusr',2)->get($this->_table)->num_rows();
    }
    
    // function untuk menghitung berapa jumlah data
    public function nilai($nilai1, $nilai2)
    {
        $this->db->where('nliusr > ', $nilai1);
        $this->db->where('nliusr <= ', $nilai2);
        return $this->db->get($this->_table)->num_rows();
    }
}

/* End of file User_model.php */
