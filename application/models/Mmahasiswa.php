<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Mmahasiswa extends CI_Model {

	public function getData()
	{
        // tampil data dari "tb_mahasiswa"
        $this->db->from("tb_mahasiswa");
        // urutan berdasarkan npm secara asc
        $this->db->order_by("npm", "ASC");
        // eksekusi query
        $query = $this->db->get()->result();
        //kirim hasil query ke controller "Mahasiswa"
        return $query;
    }
}