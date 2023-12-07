<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konten extends CI_Controller
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
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('konten a');
        $this->db->join('kategori b','a.kategori_id=b.kategori_id','left');
        $this->db->join('userr c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        // $this->db->where('c.level="pengguna"');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'halaman konten',
            'kategori'      => $kategori,
            'konten'        => $konten
        );
        $this->template->load('template_admin', 'admin/konten_index',$data);
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
        $config['upload_path']          = 'assets/upload/konten/';
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
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   

        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('alert',
        '<div class="alert alert-danger" role="alert">
        cari judul konten lain ya! </div>');
        redirect('admin/konten');
        };
        $data = array(
            'judul' => $this->input->post('judul'),
            'kategori_id' => $this->input->post('kategori_id'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date('Y-m-d'),
            'username' =>$this->session->userdata('username'),
            'foto' => $namafoto,
            'slug' => str_replace(' ','-',$this->input->post('judul')),//mengganti spasi menjadi - pada judul
        );
        $this->db->insert('konten',$data);
        $this->session->set_flashdata('alert',
        '<div class="alert alert-primary" role="alert">
        berhasil ditambah </div>');
        redirect('admin/konten');
    }

    public function update()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto; //file yang diupload, akan diubah namanya menjadi nama seperti di $namafoto
        $config['overwrite']            = true;//mereplace foto dari yang terlama ke  terbaru
        $config['allowed_types']         = '*';
        $this->load->library('upload', $config);// untuk setting perintah yang diatas(setup)
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran fotomu terlalu besar nih, upload ulang foto dengan ukuran yang kurang dari 500 KB yaa.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        
        $data = array(
            'judul' => $this->input->post('judul'),
            'kategori_id' => $this->input->post('kategori_id'),
            'keterangan' => $this->input->post('keterangan'),
            'slug' => str_replace(' ','-',$this->input->post('judul')),//mengganti spasi menjadi - pada judul
        );

        $where = array(
            'foto'      => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data,$where);
        $this->session->set_flashdata('alert',
        '<div class="alert alert-primary" role="alert">
        berhasil diperbarui </div>');
        redirect('admin/konten');
    }

    public function delete($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/konten/".$id);
            }
        $where = array('foto' => $id);
        $this->db->delete('konten', $where);
		$this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				berhasil dihapus
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		redirect('admin/konten');
		return redirect('admin/konten');
    }

}
