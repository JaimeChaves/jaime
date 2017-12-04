<?php

class Prescricao{
   private $id_presquicao;
   private $id_agenda;
   private $presquicao;


    public function cadastrar() {

        $sql = "INSERT INTO `presquicao` (`id_presquicao`, `presquicao`, `id_agendamento`) VALUES (NULL, '$this->presquicao', '$this->id_agenda');";
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
    public function getIdPresquicao() {
        return $this->id_presquicao;
    }

     public function setIdPresquicao($id_presquicao) {
        $this->id_presquicao = $id_presquicao;
    }
    public function getIdAgenda() {
        return $this->id_agenda;
    }

     public function setIdAgenda($id_agenda) {
        $this->id_agenda = $id_agenda;
    }


    public function getPrescricao() {
        return $this->Presquicao;
    }

     public function setPrescricao($presquicao) {
        $this->presquicao = $presquicao;
    }
}

