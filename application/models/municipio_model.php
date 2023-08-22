<?php

class municipio_model extends CI_model{ 

    public function index(){

      return $this->db->get('municipio')->result_array();
      
    }

    public function store($muni){
      
      $this->db->insert('municipio', $muni);
    }

    public function show($id){
      return $this->db->get_where('municipio', array(
        'municipio_id'=> $id
      ))->row_array();

    }

    public function update($id, $muni){

      $this->db->where('municipio_id', $id);
      return $this->db->update('municipio', $muni);
    }

    public function apagar($id){

      $this->db->where('municipio_id', $id);
      return $this->db->delete('municipio');
    }

}

