<?php

class Beneficiario_model extends CI_model{ 

    
    public function index(){

      $query = $this->db->query("SELECT b.id_beneficiario, b.nome, b.cpf, ms.mudas,b.qtd_mudas, m.municipio, b.data_entrega 
      FROM tb_beneficiario b 
      inner JOIN municipio m on m.municipio_id = b.municipio_id
      inner join tb_mudas ms on ms.id_mudas = b.id_mudas;
      ");

      return $query->result_array();
      #return $this->db->get('tb_beneficiario')->result_array();
      
    }

    public function store($beneficiario){
      
      $this->db->insert('tb_beneficiario', $beneficiario);
    }

    public function show($id){


      $query = $this->db->query("SELECT b.id_beneficiario, b.nome, b.cpf, ms.mudas,b.qtd_mudas, m.municipio, b.data_entrega FROM tb_beneficiario b inner JOIN municipio m on m.municipio_id = b.municipio_id inner join tb_mudas ms on ms.id_mudas = b.id_mudas where b.id_beneficiario = $id");
     // return $this->db->get_where('tb_beneficiario', array('id_beneficiario'=> $id))->row_array();
        return $query->row_array();

    }

    public function update($id, $beneficiario){

      $this->db->where('id_beneficiario', $id);
      return $this->db->update('tb_beneficiario', $beneficiario);
    }

    public function delete($id){

      $this->db->where('id_beneficiario', $id);
      return $this->db->delete('tb_beneficiario');
    }

}

