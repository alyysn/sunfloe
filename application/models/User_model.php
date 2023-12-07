<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    public function simpan()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'level'         => $this->input->post('level')
        );
        $this->db->insert('userr',$data);
        
    }

    public function update_data(){
        $where = array(
            'user_id'   => $this->input->post('user_id')
        );
        $data = array(
            'nama'  => $this->input->post('nama')
        );
        $this->db->update('userr',$data,$where);
    }
}