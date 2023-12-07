<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
    }

	// public function index()
	// {
    //     $this->load->model('Saran_model');
    //     $this->db->from('saran');
    //     $this->db->order_by('nama','ASC');
    //     $saran = $this->db->get()->result_array();
    //     $data = array(
    //         'judul_halaman' => 'umpan balik',
    //         'saran'        => $saran
    //     );

        
    //     $this->template->load('template_admin','admin/saran_back',$data);
	// }

    // public function delete($id){
    //     $where = array('saran_id' => $id);
    //     $this->db->delete('saran', $where);
	// 	$this->session->set_flashdata('alert','
	// 		<div class="alert alert-primary alert-dismissible" role="alert">
	// 			berhasil dihapus
	// 			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		</div>
	// 	');
	// 	redirect('admin/saran');
    // }

    // public function delete_all($ids){
    //   $this->input->post('ids');
    //   $this->Saran_model->delete_multiple_record($ids);
    //   $this->session->set_flashdata('alert','
	// 		<div class="alert alert-primary alert-dismissible" role="alert">
	// 			berhasil dihapus
	// 			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		</div>
	// 	');
    //   redirect('admin/saran');
    // }

    // application/controllers/ItemController.php

    public function index() {
        $this->load->model('Saran_model');
        $data['saran'] = $this->Saran_model->get_saran();
        $this->load->view('admin/saran_back',$data);
    }

    public function delete() {
        $this->load->model('saran_model');

        // Ambil data dari form checkbox
        $item_ids = $this->input->post('item_ids');

        // Hapus item berdasarkan ID yang dipilih
        $this->saran_model->delete_items($item_ids);

        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible" role="alert">
            berhasil dihapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');

        redirect('admin/saran');
    }
}


