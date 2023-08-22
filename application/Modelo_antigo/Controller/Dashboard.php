<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		permission();
		$this->load->model('games_model');
		$this->load->model('busca_model');

	}

	public function index(){

		$data["games"] = $this->games_model->index();
		$data["title"] = "Dashboard - CodeIgniter";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
	public function pesquisar(){


		$data["title"] = "Resultado da pesquisa por *".$_POST['busca']."*";
		$data["result"] = $this->busca_model->search($_POST);
		//$data["total"] = $this->busca_model->total_qtd($_POST);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/result', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}