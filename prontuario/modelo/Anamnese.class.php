<?php

class Anamnese{
   private $id_anamnese;
   private $id_agenda;
   private $queixa;
   private $historico;
   private $renais;
   private $cardicos;
   private $articulares;
   private $respiratorio;
   private $gastrico;
   private $alergia;
   private $hepatite;
   private $gravidez;
   private $diabete;
   private $cicatrizacao;
   private $medicamentos;
  


    public function cadastrar() {

        $sql = "INSERT INTO `anamnese` (`id_agendamento`, `queixa_principal`, `historico`, `problemas_renais`, `problemas_cardiacos`, `problemas_articulares`, `problemas_respiratorios`, `problemas_gastricos`, `Alergia`, `hepatite`, `gravidez`, `diabetes`, `problemas_de_cicatrizacao`, `ultiliza_medicamentos`) VALUES ('$this->id_agenda', '$this->queixa', '$this->historico', '$this->renais', '$this->cardicos', '$this->articulares', '$this->respiratorio', '$this->gastrico', '$this->alergia', '$this->hepatite', '$this->gravidez', '$this->diabete', '$this->cicatrizacao', '$this->medicamentos')";
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
    public function getId() {
        return $this->id_anamnese;
    }

     public function setId($id) {
        $this->id = $id_anamnese;
    }
    public function getIdAgenda() {
        return $this->id_agenda;
    }

     public function setIdAgenda($id_agenda) {
        $this->id_agenda = $id_agenda;
    }

   public function getQueixa() {
        return $this->queixa;
    }

    public function setQueixa($queixa) {
        $this->queixa = $queixa;
    }

    public function getHitorico() {
        return $this->historico;
    }

    public function setHistorico($historico) {
        $this->historico = $historico;
    }

    public function getRenais() {
        return $this->renais;
    }

    public function setRenais($renais) {
        $this->renais = $renais;
    }

    public function getArticulares() {
        return $this->articulares;
    }

    public function setArticulares($articulares) {
        $this->articulares = $articulares;
    }

      public function getCardico() {
        return $this->cardico;
    }

    public function setCardico($cardico) {
        $this->cardico = $cardico;
    }

      public function getRespiratorio() {
        return $this->respiratorio;
    }

    public function setRespiratorio($respiratorio) {
        $this->respiratorio = $respiratorio;
    }

    public function getGastrico() {
        return $this->gastrico;
    }

    public function setGastrico($gastrico) {
        $this->gastrico = $gastrico;
    }

    public function getAlergia() {
        return $this->alergia;
    }

    public function setAlergia($alergia) {
        $this->alergia = $alergia;
    }


      public function getHepatite() {
        return $this->hepatite;
    }

    public function setHepatite($hepatite) {
        $this->hepatite = $hepatite;
    }

     public function getGravides() {
        return $this->gravidez;
    }

    public function setGravidez($gravidez) {
        $this->gravidez = $gravidez;
    }

    public function getDiabete() {
        return $this->diabete;
    }

    public function setDiabete($diabete) {
        $this->diabete = $diabete;
    }

    public function getCicatrizacao() {
        return $this->cicatrizacao;
    }

    public function setCicatrizacao($cicatrizacao){
        $this->cicatrizacao = $cicatrizacao;
    }

    public function getMedicamento() {
        return $this->medicamentos;
    }

    public function setMedicamento($medicamentos) {
        $this->medicamentos = $medicamentos;
    }
    
    public function getHipoteze() {
        return $this->hipoteze;
    }

    public function setHipoteze($hipoteze) {
        $this->hipoteze = $hipoteze;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setObervacao($observacao) {
        $this->observacao = $observacao;
    }


}

