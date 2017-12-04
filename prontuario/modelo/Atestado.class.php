<?php

class Atestado{
   private $id_atestado;
   private $id_agenda;
   private $atestado;


    public function cadastrar() {

        $sql = "INSERT INTO `atestado` (`id_atestado`, `atestado`, `id_agendamento`) VALUES ('', '$this->atestado', $this->id_agenda)";
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
    public function getIdAtestado() {
        return $this->id_atestado;
    }

     public function setIdAtestado($id_atestado) {
        $this->id_atestado = $id_atestado;
    }
    public function getAtestado() {
        return $this->atestado;
    }

     public function setAtestado($atestado) {
        $this->atestado = $atestado;
    }
    public function getIdAgenda() {
        return $this->id_agenda;
    }

     public function setIdAgenda($id_agenda) {
        $this->id_agenda = $id_agenda;
    }
}

