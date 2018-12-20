<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("usuario_model");
       // $this->load->libraries("Controle_acesso");
       // $this->controle_acesso->controlar();
       $user = $this->session->userdata("usuario_id");
       if(empty($user)){
           redirect("/");
       }

      

    }



    public function deslogar(){
        $this->session->unset_userdata("usuario_id");
        redirect("/");
    }

    
    public function listar()
	{
        $lista = $this->usuario_model->listartodos();
        $dados = array("usuarios" => $lista);
		$this->load->view('usuario/listar', $dados);
    }
    


    public function cadastro(){
        $this->load->view('usuario/cadastro');
        
    }
    
    public function salvar(){
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => $this->input->post("senha")
        );
        $this->usuario_model->inserir($usuario);
		redirect('usuario/listar');
    }

    public function excluir($id){
        $this->usuario_model->deletar($id);
        redirect('usuario/listar');
    }
    
    public function editar(){
        $id = $this->input->post("id");
        $vetor["usuario"] = $this->usuario_model->selectuserid($id);
        $this->load->view("usuario/editar", $vetor);
    }

    public function atualizar(){
        $id = $this->input->post("id");
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => $this->input->post("senha")
        );
        $this->usuario_model->update($id, $usuario);
        redirect('usuario/listar');
    }

    public function busca(){
        $busca = $this->input->post("busca");
        $dados['usuarios'] = $this->usuario_model->busca($busca);
        $this->load->view("usuario/listar", $dados);
    }

        
    
}
