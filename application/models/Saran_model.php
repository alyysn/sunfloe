<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran_model extends CI_Model{

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
    // public function delete_multiple_record($ids){
    //     $this->db->where_in('saran_id',$ids);
    //     $this->db->delete('saran');
    // }

    // application/models/Item_model.php

    public function get_saran() {
        return $this->db->get('saran')->result_array();
        $this->db->order_by('nama','ASC');
        
        
        
    }

    public function delete_items($item_ids) {
        $this->db->where_in('saran_id', $item_ids);
        $this->db->delete('saran');
    }


}
