<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');


class Dashboard extends CI_Controller{

    public function __construct(){
		parent::__construct();
        $this->load->model("beneficiario_model");
        $this->load->model("municipio_model");
        $this->load->model("mudas_model");
        $this->load->model("users_model");
    
	}
    public function index(){
        permission();

        $data["muni"] = $this->municipio_model->index();
        $data["mudas"] = $this->mudas_model->index();
        $data["beneficiario"] = $this->beneficiario_model->index();
        $data['usuarios'] = $this->users_model->index();
        $data["title"] = "Dashboard - SIMS";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }


    public function pesquisar(){
        permission();
        $this->load->model("busca_model");
        $data["title"] = "Resultado da pesquisa por *".$_POST['busca']."*";
		$data["result"] = $this->busca_model->search($_POST);
        $this->load->model("beneficiario_model");
        $this->load->model("municipio_model");
        $this->load->model("mudas_model");
        $data["muni"] = $this->municipio_model->index();
        $data["mudas"] = $this->mudas_model->index();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/result', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }
}
