<?php

class Usuario_model extends CI_Model{

    public function listartodos(){
        return $this->db->get("usuarios")->result();
    }

    public function inserir($usuario){
        $this->db->insert("usuarios", $usuario);
    }

    public function selectuserid($id){
        $this->db->where("idusuario", $id);
        return $this->db->get("usuarios")->row();
    }

    public function update($id, $usuario){
        $this->db->where("idusuario", $id);
        $this->db->update("usuarios", $usuario);
    }

    public function deletar($id){
        $this->db->where("idusuario", $id);
        $this->db->delete("usuarios");
    }

    public function busca($busca){
        $this->db->select('*');
        $this->db->like('nome', $busca);
        $this->db->or_like('email', $busca);
        return $this->db->get("usuarios")->result();
    }


}