<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->model('Search_model');
	}
    
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

        // $konten = $this->db->get()->result_array();

		$this->db->from('konten');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPost= $this->db->get()->result_array();

		$data  = array (
			'judul' 	=> 'Beranda || aliya',
			'konfig'	=> $konfig,
			'kategori'  => $kategori,
			'caraousel' => $caraousel,
			// 'konten'	=> $konten,
			'recentPost'	=> $recentPost
		);
		if ($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword',$data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		
		$this->db->like('judul',$data['keyword']);
		$this->db->or_like('keterangan',$data['keyword']);
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$data['konten'] = $this->Search_model->getKonten($data['keyword']);
		$this->template->load('template_depan', 'beranda',$data);
	}

	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.kategori_id=b.kategori_id','left');
        $this->db->join('userr c','a.username=c.username','left');
        $this->db->where('a.kategori_id',$id);
        $konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('kategori_id',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;

		$this->db->from('konten');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPost= $this->db->get()->result_array();


		$data  = array (
			'judul' 	=> $nama_kategori.' || aliya',
			'nama_kategori'=> $nama_kategori,
			'konfig'	=> $konfig,
			'kategori'  => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten,
			'recentPost' => $recentPost
		);
		$this->template->load('template_depan', 'kategori',$data);
	}

	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.kategori_id=b.kategori_id','left');
        $this->db->join('userr c','a.username=c.username','left');
		$this->db->where('slug',$id);
        $konten = $this->db->get()->row();

		$this->db->from('saran');
		$saran = $this->db->get()->result_array();


		$this->db->from('konten');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPost= $this->db->get()->result_array();
		$data  = array (
			'judul' 	=> $konten->judul.' || aliya',
			'konfig'	=> $konfig,
			'kategori'  => $kategori,
			'konten'	=> $konten,
			'recentPost'	=> $recentPost,
			'saran'		=> $saran
		);
		$this->template->load('template_depan', 'detail',$data);
	}

	// public function keyword(){
	// 	if($this->input->post('submit')){
	// 		echo $this->input->post('keyword');
	// 	}
	// }

	public function galery(){
		$this->db->from('galery');
		$galery = $this->db->get()->result_array();
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.kategori_id=b.kategori_id','left');
        $this->db->join('userr c','a.username=c.username','left');
		$this->db->where('slug');
        $konten = $this->db->get()->row();
		$data  = array (
			'judul'		=> 'galeri',
			'galery'	=> $galery,
			'konfig'	=> $konfig,
			'kategori'  => $kategori,
			'konten'	=> $konten
		);
		$this->template->load('template_depan', 'galeri',$data);
	}

	public function saran(){
		if($this->input->post()){
			$data = array(
				'nama'      => $this->input->post('nama'),
				'email'         => $this->input->post('email'),
				'isi_saran'          => $this->input->post('isi_saran'),
				'tanggal'   => date('Y-m-d')
			);
			$this->db->from('saran');
			$this->db->insert('saran',$data);
			$this->session->set_flashdata('alert','
			<div class="alert alert-primary alert-dismissible" role="alert">
				saran berhasil dikirim !
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		}
		
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$data  = array (
			'judul' => 'umpan_balik',
			'konfig'	=> $konfig,
			'kategori'  => $kategori,
			
			
		);

		$this->template->load('template_depan','saran',$data);
	}

		// public function delete($id){
		// 	$where = array('saran_id' => $id);
		// 	$this->db->delete('saran', $where);
		// 	$this->session->set_flashdata('alert','
		// 		<div class="alert alert-primary alert-dismissible" role="alert">
		// 			berhasil dihapus
		// 			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		// 		</div>
		// 	');
		// 	redirect('admin/saran');
		// }
	

}
