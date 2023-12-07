<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

        $konten = $this->db->get()->result_array();

		$data  = array (
			'judul' 	=> 'list konten || aliya',
			'konfig'	=> $konfig,
			'kategori'  => $kategori,
			'caraousel' => $caraousel,
			'konten'	=> $konten
		);
		
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
        $data['konten'] = $this->load->model('pagination_model','pagination');
		$data['konten'] = $this->pagination->getPagination(1,0);
		$this->load->view('beranda',$data);
	}

	

	// public function keyword(){
	// 	if($this->input->post('submit')){
	// 		echo $this->input->post('keyword');
	// 	}
	// }

}
