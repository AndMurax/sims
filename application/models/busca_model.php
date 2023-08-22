<?php

class Busca_model extends CI_model{ 

// função utilizada para buscar um informação específica no banco
    public function search($busca){

        if(empty($busca)){
            return array();
        }
        $busca = $this->input->post('busca');
        return $this->db->query("SELECT b.id_beneficiario, b.nome, b.cpf, ms.mudas,b.qtd_mudas, m.municipio, b.data_entrega 
        FROM tb_beneficiario b 
        inner JOIN municipio m on m.municipio_id = b.municipio_id
        inner join tb_mudas ms on ms.id_mudas = b.id_mudas
        where nome like '%$busca%';
        ")->result_array();
    }
    
    public function qtd_total($busca){
        $query = $this->db->query("SELECT count(id_beneficiario) AS num_of_time FROM tb_beneficiario where nome = $busca ");
        // print_r($query->result());
        return $query->result_array();
        
    }
}

?>