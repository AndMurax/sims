<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function __construct(){
		parent::__construct();
		permission();
		$this->load->model('games_model');
		$this->load->model('login_model');
		
	}

	public function index(){
		
		
		$data["games"] = $this->games_model->index();
		$data["title"] = "Games";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/games',$data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}


	public function new(){

		$data["title"] = "Games";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/form-games',$data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function store(){

		$game = $_POST;
		$game["user_id"] = $_SESSION['id'];
		$this->games_model->store($game);
		redirect('/games');
	}


	public function edit($id){
		$data["game"] = $this->games_model->show($id);
		$data["title"] = "Editar Game";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games',$data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function update($id){
		$game = $_POST;
		$this->games_model->update($id, $game);
		redirect('/games');
	}

	public function delete($id){

		$this->games_model->apagar($id);
		redirect('games');
	}

}
