<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sunscreen extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->template->load('template', 'sunscreen/sunscreen_data');
	}

	public function add(){

		$this->form_validation->set_rules('nameProduct', 'Nama Produk', 'required');
		$this->form_validation->set_rules('price', 'Harga Produk', 'required');
		$this->form_validation->set_rules('spf', 'SPF', 'required');
		$this->form_validation->set_rules('rating', 'Rating Produk', 'required');
		$this->form_validation->set_rules('link', 'Link Gambar', 'required');
		$this->form_validation->set_rules('nameCompany', 'Nama Perusahaan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan anda isi');

		if($this->form_validation->run() == FALSE){
			$this->template->load('template', 'sunscreen/sunscreen_form_add');
		}else {
			echo "proses data berhasil";
		}



	}
}
