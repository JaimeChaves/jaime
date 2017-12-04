<?php

class Prontuario{
    private $id;


    public function cadastrar() {

        $sql = " INSERT INTO `prontuario` (`id`, data, `hora`, `paciente`, `medico`) VALUES (NULL,'$this->data' , '$this->hora', '$this->paciente', '$this->medico')";
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

     public function teste() {
        $sql = "SELECT Agendamento.nome_paciente FROM Agendamento JOIN sinais_vitais ON Agendamento.id_agenda = sinais_vitais.id_agendamento LEFT JOIN hipoteze ON Agendamento.id_agenda = hipoteze.id_agendamento LEFT JOIN presquicao ON Agendamento.id_agenda = presquicao.id_agendamento LEFT JOIN evolucao ON Agendamento.id_agenda = evolucao.id_agendamento LEFT JOIN anamnese ON Agendamento.id_agenda = anamnese.id_agendamento LEFT JOIN atestado ON Agendamento.id_agenda = atestado.id_agendamento WHERE Agendamento.nome_paciente =  '$this->id'";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }

    public function listar() {
        $sql = "SELECT Agendamento.nome_paciente FROM Agendamento JOIN sinais_vitais ON Agendamento.id_agenda = sinais_vitais.id_agendamento LEFT JOIN hipoteze ON Agendamento.id_agenda = hipoteze.id_agendamento LEFT JOIN presquicao ON Agendamento.id_agenda = presquicao.id_agendamento LEFT JOIN evolucao ON Agendamento.id_agenda = evolucao.id_agendamento LEFT JOIN anamnese ON Agendamento.id_agenda = anamnese.id_agendamento LEFT JOIN atestado ON Agendamento.id_agenda = atestado.id_agendamento WHERE Agendamento.nome_medico =  '$_COOKIE[usuario]'";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }
    public function ListarProntuario(){
       $sql = "SELECT Agendamento.nome_paciente, presquicao.id_agendamento, anamnese.queixa_principal, anamnese.historico, anamnese.problemas_renais, anamnese.problemas_cardiacos, anamnese.problemas_articulares, anamnese.problemas_articulares, anamnese.problemas_respiratorios, anamnese.problemas_gastricos, anamnese.Alergia, anamnese.hepatite, anamnese.gravidez, anamnese.diabetes, anamnese.problemas_de_cicatrizacao, anamnese.ultiliza_medicamentos, sinais_vitais.id_sinais, sinais_vitais.data, sinais_vitais.hora, sinais_vitais.altura, sinais_vitais.peso, sinais_vitais.IMC, sinais_vitais.temperatura, sinais_vitais.dor, hipoteze.id_hipotese, hipoteze.hipotese, hipoteze.observacao, presquicao.id_presquicao, presquicao.presquicao, evolucao.evolucao,  atestado.atestado
            FROM Agendamento JOIN sinais_vitais 
            ON Agendamento.id_agenda = sinais_vitais.id_agendamento 
            LEFT JOIN hipoteze       
            ON Agendamento.id_agenda = hipoteze.id_agendamento
            LEFT JOIN presquicao 
            ON Agendamento.id_agenda = presquicao.id_agendamento
            LEFT JOIN evolucao
            ON Agendamento.id_agenda = evolucao.id_agendamento
            LEFT JOIN anamnese 
            ON Agendamento.id_agenda = anamnese.id_agendamento
            LEFT JOIN atestado
            ON Agendamento.id_agenda = atestado.id_agendamento
            WHERE Agendamento.nome_paciente = '$this->id'";

        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";

        else
            return $lista;
    }

    public function Sinais() {
        $sql = "SELECT * FROM `sinais_vitais` WHERE 1 /* =   '$_COOKIE[usuario]'*/";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }
    public function Hipotese() {
        $sql = "SELECT * FROM `hipoteze` WHERE 1 /* =   '$_COOKIE[usuario]'*/";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }
     public function Prescricao() {
        $sql = "SELECT * FROM `presquicao` WHERE 1 /* =   '$_COOKIE[usuario]'*/";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }
     public function Evolucao() {
        $sql = "SELECT * FROM `evolucao` WHERE 1 /* =   '$_COOKIE[usuario]'*/";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }
     public function Atestado() {
        $sql = "SELECT * FROM `atestado` WHERE 1 /* =   '$_COOKIE[usuario]'*/";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
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
        return $this->id;
    }

     public function setId($id) {
        $this->id = $id;
    }
    
}

