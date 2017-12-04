<?php

class Evolucao{
   private $id_evolucao;
   private $id_agenda;
   private $evolucao;


    public function cadastrar() {

        $sql = "INSERT INTO `evolucao` (`id_evolucao`, `evolucao`, `id_agendamento`) VALUES ('', '$this->evolucao', '$this->id_agenda')";
        echo "cadastrado com sucesso";
        if (mysqli_query(Conexao::$connection, $sql))
            return true;
        else
            return false;
    }

    public function editar() {
        $sql = "update usuario set nome = '{$this->nome}', login = '{$this->login}', senha = '{$this->senha}' where id = '{$this->id}'";
        if (mysql_query($sql))
            return true;
        else
            return false;
    }

    public function listar() {
        $sql = "select * from usuario";
        $res = mysql_query($sql);

        while ($objeto = mysql_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }

    public static function getUsuario($id) {
        $sql = "select * from usuario where id = '$id'";
        $res = mysql_query($sql);
        $usuario = mysql_fetch_object($res);
        return $usuario;
    }

    public function excluir() {
        $sql = "delete from usuario where id = '{$this->id}'";
        if (mysql_query($sql))
            return true;
        else
            return false;
    }
    public function getIdEvolucao() {
        return $this->id_evolucao;
    }

     public function setIdEvolucao($id_evolucao) {
        $this->id_evolucao = $id_evolucao;
    }
    public function getEvolucao() {
        return $this->evolucao;
    }

     public function setEvolucao($evolucao) {
        $this->evolucao = $evolucao;
    }
     public function getIdAgenda() {
        return $this->id_agenda;
    }

     public function setIdAgenda($id_agenda) {
        $this->id_agenda = $id_agenda;
    }
}

