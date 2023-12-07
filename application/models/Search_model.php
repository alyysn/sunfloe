<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_model extends CI_Model{
    public function getKonten($keyword = null)
    {
        if ($keyword){
        $this -> db -> like ('judul', $keyword);
        $this -> db -> or_like('keterangan', $keyword);
        }
    
    $this->db->from('konten a');
    $this->db->join('kategori b','a.kategori_id=b.kategori_id','left');
    $this->db->join('userr c','a.username=c.username','left');
    $this->db->order_by('tanggal','DESC');
    $konten = $this->db->get()->result_array();

    return $konten;
   
    }
}
