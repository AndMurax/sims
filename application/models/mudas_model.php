<?php

class mudas_model extends CI_model{ 

    public function index(){

      return $this->db->get('tb_mudas')->result_array();
      
    }

    public function store($mudas){
      
      $this->db->insert('tb_mudas', $mudas);
    }

    public function show($id){
      return $this->db->get_where('tb_mudas', array(
        'id_mudas'=> $id
      ))->row_array();

    }

    public function update($id, $mudas){

      $this->db->where('id_mudas', $id);
      return $this->db->update('tb_mudas', $mudas);
    }

    public function apagar($id){

      $this->db->where('id_mudas', $id);
      return $this->db->delete('tb_mudas');
    }

}

