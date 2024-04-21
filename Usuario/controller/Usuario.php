<?php
class Usuario{
    public $id;
    public $nome;
    public $apelido;
    public $obs;

    public function cadastrar() {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->set("nome", $this->nome);
        $usuarioDAO->set("apelido", $this->apelido);
        $usuarioDAO->set("obs", $this->obs);
        
        return $usuarioDAO->cadastrar();   
    }

    public function alterar() {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->set("id", $this->id);
        $usuarioDAO->set("nome", $this->nome);
        $usuarioDAO->set("apelido", $this->apelido);
        $usuarioDAO->set("obs", $this->obs);

        return $usuarioDAO->alterar();   
    }

    public function pesquisar(){
        $usuarioDAO = new UsuarioDAO();
        
        return $usuarioDAO->pesquisar(); 
    }

    public function excluir(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->set("id", $this->id);

        return $usuarioDAO->excluir();
    }
    
    function set($prop, $value) {
        $this->$prop = $value;
    }
}
