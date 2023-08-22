<?php

class Busca_model extends CI_model{ 

// função utilizada para buscar um informação específica no banco
    public function search($busca){

        if(empty($busca)){
            return array();
        }
        $busca = $this->input->post('busca');
        $this->db->like('name', $busca);
        return $this->db->get('tb_games')->result_array();
    }
    
    public function qtd_total($busca){
        $query = $this->db->query("SELECT count(id) AS num_of_time FROM tb_games where name = $busca ");
        // print_r($query->result());
        return $query->result_array();
        
    }
}

?>