<?php 
class Instituicoes extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('users_model');
    }
    public function index() {
        permission();
        //$data['total_users'] = $this->users_model->count_users();
        
        $data["title"] = "Usuarios";
        $data['usuarios'] = $this->users_model->index();

       
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/instituicoes', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
    }
    
}
?>