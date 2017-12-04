<?php

class Sinais{
   private $id_sinais;
   private $id_agenda;
   private $data;
   private $hora;
   private $altura;
   private $peso;
   private $imc;
   private $temperatura;
   private $dor;
  


    public function cadastrar() {

        $sql = "INSERT INTO `sinais_vitais` (`id_sinais`, `data`, `hora`, `altura`, `peso`, `IMC`, `temperatura`, `dor`, `id_agendamento`) VALUES (NULL, '$this->data', '$this->hora', '$this->altura', '$this->peso', '$this->imc', '$this->temperatura', '$this->dor', '$this->id_agenda');";
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
    public function getIdSinais() {
        return $this->id_sinais;
    }

     public function setIdSinais($id_sinais) {
        $this->id_sinais = $id_sinais;
    }
    public function getIdAgenda() {
        return $this->id_agenda;
    }

     public function setIdAgenda($id_agenda) {
        $this->id_agenda = $id_agenda;
    }
    public function getData() {
        return $this->data;
    }

     public function setData($data) {
        $this->data = $data;
    }

   public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getImc() {
        return $this->imc;
    }

    public function setImc($imc) {
        $this->imc = $imc;
    }

      public function getTemperatura() {
        return $this->temperatura;
    }

    public function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }

      public function getDor() {
        return $this->dor;
    }

    public function setDor($dor) {
        $this->dor = $dor;
    }
}

