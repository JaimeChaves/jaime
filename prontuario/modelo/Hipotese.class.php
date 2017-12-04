<?php

class Hipotese{
   private $id_hipotese;
   private $id_agenda;
   private $hipotese;
   private $observacao;


    public function cadastrar() {

        $sql = "INSERT INTO `hipoteze` (`id_hipotese`, `hipotese`, `observacao`, `id_agendamento`) VALUES ('', '$this->hipotese', '$this->observacao', '$this->id_agenda')";
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
    public function getIdHipotese() {
        return $this->id_hipotese;
    }

     public function setIdHipotese($hipotese) {
        $this->hipotese = $hipotese;
    }
    public function getHipoteze() {
        return $this->hipotese;
    }

    public function getIdAgenda() {
        return $this->id_agenda;
    }

     public function setIdAgenda($id_agenda) {
        $this->id_agenda = $id_agenda;
    }

     public function setHipotese($hipotese) {
        $this->hipotese = $hipotese;
    }

   public function getObservacao() {
        return $this->observacao;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }
}

