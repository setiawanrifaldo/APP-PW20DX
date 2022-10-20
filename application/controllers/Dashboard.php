<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// $this->load->library(array('session','email'));
		// $this->load->helper
		
		// pengiriman parameter ke "view"
		//1. dengan variabel (array)
		//$data ["nama"] = "Udin";
		//$data ["kelas"] = "IF20Dx";
		//dengan arrow fuction (array)
		$data = array (
				"nama" => "Faldo",
				"kelas" => "IF20Dx",
				"jurusan" => "Informatika",
				"telpon" => "082280001717",
				"kelamin" => "Laki-Laki"
		);
		$this->load->view('dashboard_vw',$data);
	}

	function kirimkonstan()
	{
			$this->load->view('dashboard2_vw');
	}

}







