<?php

class Users_model extends CI_model{ 

    public function index(){

      return $this->db->get('tb_users')->result_array();
    }

    public function store($user){
      
      $this->db->insert('tb_users', $user);
    }

    public function show($id){
      return $this->db->get_where('tb_users', array(
        'id'=> $id
      ))->row_array();

    }

    public function update($id, $user){

      $this->db->where('id', $id);
      return $this->db->update('tb_users', $user);
    }

    public function apagar($id){

      $this->db->where('id', $id);
      return $this->db->delete('tb_users');
    }

    public function count_users() {
      return $this->db->count_all('tb_users');
  }

}

