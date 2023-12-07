<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecentLogin extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

	public function index()
	{
        $data = array(
            'judul_halaman' => 'login activity',
            'recentLog'        => $this->db->from('recent_login')->order_by('id','DESC')->get()->result_array(),
            'user'          => $this->db->get_where('userr',['username'=>$this->session->userdata('username')])
        );
        $this->template->load('template_admin', 'admin/recent_login',$data);
	}
}
