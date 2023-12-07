<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if ($this->session->userdata('level')== NULL){
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Nama Kategori',
            'kategori'          => $kategori
        );
        $this->template->load('template_admin', 'admin/kategori_index',$data);
    }

    public function tambah()
	{
        $data = array(
            'judul_halaman' => 'input kategori'
        );
		$this->template->load('template_admin','admin/kategori_tambah',$data);
	}

    public function simpan()
    {
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('alert',
        '<div class="alert alert-danger" role="alert">
        kategori sudah ada </div>');
        redirect('admin/kategori');
        };
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert',
        '<div class="alert alert-primary" role="alert">
        berhasil ditambah </div>');
        redirect('admin/kategori');
    }

    public function delete($id){
        $where = array('kategori_id' => $id);
        $this->db->delete('kategori', $where);
		$this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				berhasil dihapus
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		redirect('admin/kategori');
		return redirect('admin/kategori');
    }

    public function update(){
        $where = array(
            'kategori_id'   => $this->input->post('kategori_id')
        );
        $data = array(
            'nama_kategori'  => $this->input->post('nama_kategori')
        );
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				berhasil diupdate
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
        redirect('admin/kategori');
    }
}
