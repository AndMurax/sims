<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');


class Beneficiario extends CI_Controller{
    public function __construct(){
		parent::__construct();
        $this->load->model("beneficiario_model");
        $this->load->model("municipio_model");
        $this->load->model("mudas_model");
    
	}

    public function index(){
        permission();
    
        $data["mudas"] = $this->mudas_model->index();
        $data["muni"] = $this->municipio_model->index();
        $data["beneficiario"] = $this->beneficiario_model->index();
        $data["title"] = "Beneficiário - SIMS";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/beneficiario', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }


    public function new(){
        permission();
    
        $data["mudas"] = $this->mudas_model->index();
        $data["muni"] = $this->municipio_model->index();
        $data["title"] = "Cadastro Beneficiario - SIMS";
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-beneficiario', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }

    public function store(){
        permission();

        $beneficiario = $_POST;
        $this->beneficiario_model->store($beneficiario);

        redirect("beneficiario");
    }
    
    public function edit($id){
        permission();
     
        $data["muni"] = $this->municipio_model->index();
        $data["mudas"] = $this->mudas_model->index();
        $data["title"] = "Editar Beneficiario - SIMS";
        $data["beneficiario"] = $this->beneficiario_model->show($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-beneficiario', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }

    public function update($id){
        permission();

        $beneficiario = $_POST;
        $this->beneficiario_model->update($id ,$beneficiario);

        redirect("beneficiario");
    }

    
    public function delete($id){
        permission();

        $beneficiario = $_POST;
        $this->beneficiario_model->delete($id);

        redirect("beneficiario");
    }
    
    
}
