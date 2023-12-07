<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagination_model extends CI_Model{
    public function getPagination($limit,$start)
    {
    return $this->db->get('pagination',$limit,$start)->result_array();
    }
}
