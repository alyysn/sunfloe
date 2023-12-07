<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if ($this->session->userdata('level')<>'admin'){
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('userr');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'data user',
            'userr'          => $user
        );
        $this->template->load('template_admin', 'admin/user_index',$data);
    }

    public function tambah()
	{
        $data = array(
            'judul_halaman' => 'input user'
        );
		$this->template->load('template_admin','admin/user_tambah',$data);
	}

    public function simpan()
    {
        $this->db->from('userr');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('alert',
        '<div class="alert alert-danger" role="alert">
        cari username lain </div>');
        redirect('admin/user');
        };
        $this->User_model->simpan();
        $this->session->set_flashdata('alert',
        '<div class="alert alert-primary" role="alert">
        berhasil ditambah </div>');
        redirect('admin/user');
    }

    public function delete($id){
        $where = array('user_id' => $id);
        $this->db->delete('userr', $where);
		$this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				berhasil dihapus
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		redirect('admin/user');
		return redirect('admin/user');
    }

    public function update(){
        $this->User_model->update_data();
        $this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				berhasil diupdate
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
        redirect('admin/user');
    }
}
