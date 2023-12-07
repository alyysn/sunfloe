<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('level')==NULL){//jika session kosong(belum login),pindah ke halaman login
            redirect('auth');
        }
    }
	public function index()
	{
        
		$data = array(
            'judul_halaman' => 'dashboard'
        );
		$this->template->load('template_admin', 'admin/dashboard',$data);
	}
}
