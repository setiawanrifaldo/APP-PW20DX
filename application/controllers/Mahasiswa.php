<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
        // panggil model "Mmahasiswa"
        $this->load->model("Mmahasiswa", "mhs", TRUE);
        // panggil fungsi "getData()"
        // $hasil = $this->mhs->getData();
        // tampilkan isi "$hasil"
        // foreach($hasil as $data)
        // {
        //     // tampikan data sesuai dengan field
        //     $id = $data->id;
        //     $npm = $data->npm;
        //     $nama = $data->nama;
        //     $telepon = $data->telepon;
        //     $jurusan = $data->jurusan;
        //     $foto = $data->foto;
        //     $status = $data->status;

        //     echo $npm.",".$nama;
        // }
        // echo "<br>";

        // panggil fungsi "getData()"
        // $hasil =  $this->mhs->getData();
        $data = array(
            "hasil" => $this->mhs->getData()
        );

        // panggil view "vw_mahasiswa"
        $this->load->view("vw_mahasiswa", $data);
    }
}