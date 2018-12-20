<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("inicio_model");
        //$this->load->library('form_validation');

    }
    public function index(){
        $this->load->view('includes/header');
        $this->load->view('inicio/login');
        $this->load->view('includes/footer');
    }
    
    public function entrar(){
		$config = array(
            array(
                'field' => 'email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'senha',
                'rules' => 'required',
            ),
            array(
                'field' => 'confirma_senha',
                'rules' => 'required|matches[senha]',
            )
        );
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE){
            $this->load->view('includes/header');
            $this->load->view('inicio/login');
            $this->load->view('includes/footer');
        }else{
            $email = $this->input->post("email");
            $senha = $this->input->post("senha");
            $this->inicio_model->logar($email, $senha);
        }
    }

    
    

}
