<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_already_login();
		$this->load->model('register_m');
        $this->load->library('form_validation');
	}


	public function regis()
	{
	
		$this->load->view('regis');
	}

	public function add()
    {
        $this->form_validation->set_rules('fullname', 'Nama Lengkap','required');
        $this->form_validation->set_rules('username', 'Username','required|min_length[5]|is_unique[user.username]',
            array('min_length' => '%s minimal 5 karakter')
        );
        $this->form_validation->set_rules('password', 'Password','required|min_length[8]',
            array('min_length' => '%s minimal 8 karakter')
        );
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password','required|matches[password]|min_length[8]',
            array('min_length' => '%s minimal 8 karakter')
        );
        $this->form_validation->set_rules('email', 'Email','required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan anda isi');
        $this->form_validation->set_message('is_unique', '%s ini sudah ada, silahkan anda ganti');
        $this->form_validation->set_message('matches', '%s tidak sesuai dengan password');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run() == FALSE){
            $this->load->view('regis');
        } else {
        
        }
    }
}
