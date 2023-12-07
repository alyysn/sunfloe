<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index(){
        if ($this->session->userdata('level')<>NULL){//jika session kosong(belum login),pindah ke halaman login
            redirect('admin/beranda');
        }
        $this->load->view('login');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('userr');
        $this->db->where('username',$username);
        $user = $this->db->get()->row();

        if ($user == NULL){
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger alert-dismissible" role="alert">
				userename tidak ada
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		    ');
            redirect('auth');
        } else if ($user->password==$password){
            echo "berhasil login";
            $data = array (
                'user_id'       =>$user->user_id,
                'username'      =>$user->username,
                'nama'          =>$user->nama,
                'level'         =>$user->level,               
            );
            $this -> session->set_userdata($data);

            $recentlog = array(
                'username'        =>$data['username'],
                'waktu'           => date('H:i:s'),
                'tanggal'         => date('Y-m-d'),
                'status'          =>'LOGIN'

            );
            $this->db->insert('recent_login',$recentlog);

            redirect('admin/beranda');
        }else {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger alert-dismissible" role="alert">
				password salah
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		    ');
            redirect('auth');
        }

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('beranda');
    }
}
