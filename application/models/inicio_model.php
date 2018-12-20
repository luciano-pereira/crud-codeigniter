<?php

class inicio_model extends CI_Model{

    
    public function logar($email, $senha){
        
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $result =  $this->db->get("usuarios");

        if($result->num_rows() == 1){
            $usuario = $result->row();
            $this->session->set_userdata("usuario_id", $usuario->idusuario);
            $this->session->set_userdata("usuario_logado", $usuario->nome);
            redirect("usuario/listar");
        }else{
            redirect("/");
        }
    }


}