<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')== NULL){
            redirect('auth');
        }
    }
    public function index()
    {
       
        $this->db->from('galery');
        $this->db->order_by('tanggal','DESC');
        $galery = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'galeri',
            'galery'      => $galery
        );
        $this->template->load('template_admin', 'admin/galeri_back',$data);
    }

    public function tambah()
	{
        $data = array(
            'judul_halaman' => 'Halaman kategori'
        );
		$this->template->load('template_admin','admin/kategori_tambah',$data);
	}

    public function simpan()
    {
        $namafoto = date('YmdHis').'.jpg';//penamaan ini digunakan agar foto tidak sama
        $config['upload_path']          = 'assets/upload/galeri/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']         = '*';
        $config['file_name']            = $namafoto; //file yang diupload, akan diubah namanya menjadi nama seperti di $namafoto
        $this->load->library('upload', $config);// untuk setting perintah yang diatas(setup)
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran fotomu terlalu besar nih, upload ulang foto dengan ukuran yang kurang dari 500 KB yaa.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galery');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   

        $this->db->from('galery');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('alert',
        '<div class="alert alert-danger" role="alert">
        cari judul konten lain ya! </div>');
        redirect('admin/galery');
        };
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => date('Y-m-d'),
            'foto' => $namafoto,
        );
        $this->db->insert('galery',$data);
        $this->session->set_flashdata('alert',
        '<div class="alert alert-primary" role="alert">
        berhasil ditambah </div>');
        redirect('admin/galery');
    }

    public function delete($id){
        $filename=FCPATH.'/assets/upload/galeri/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/galeri/".$id);
            }
        $where = array('foto' => $id);
        $this->db->delete('galery', $where);
		$this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				berhasil dihapus
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		redirect('admin/galery');
		return redirect('admin/galery');
    }

}
