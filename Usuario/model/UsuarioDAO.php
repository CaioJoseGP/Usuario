<?php
class UsuarioDAO{
    public $id;
    public $nome;
    public $apelido;
    public $obs;

    public function cadastrar() {
        $conexao = new Conexao();

        $SQL = "INSERT INTO usuario (nome, apelido, obs)
        VALUES ('$this->nome', '$this->apelido', '$this->obs') ";

        $conexao->set("sql", $SQL);
        $conexao->query();
    }

    public function alterar() {
        $conexao = new Conexao();

        $SQL = "UPDATE usuario
        SET nome = '$this->nome', apelido = '$this->apelido', obs = '$this->obs'
        WHERE (id = $this->id) ";

        $conexao->set("sql", $SQL);
        $conexao->query();           
    }

    public function pesquisar() {
        $conexao = new Conexao();

        $SQL = "SELECT id, nome, apelido, obs
        FROM usuario ";

        $conexao->set("sql", $SQL);
        return $conexao->query();
    }

    public function excluir() {
        $conexao = new Conexao();

        $SQL = "DELETE FROM usuario 
        WHERE id = '$this->id' ";

        $conexao->set("sql", $SQL);
        $conexao->query();
    }
    
    function set($prop, $value) {
        $this->$prop = $value;
    }
}