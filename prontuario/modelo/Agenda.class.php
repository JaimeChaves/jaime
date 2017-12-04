<?php


class Agenda{
   private $ip_agenda;
   private $data;
   private $hora;
   private $nome_paciente;
   private $nome_medico;
   private $usuario;
      

    public function cadastrar() {

        $sql = "INSERT INTO `Agendamento` (`id_agenda`, `data`, `hora`, `nome_medico`, `nome_paciente`, `id_atender`) VALUES (NULL, '$this->data', '$this->hora', '$this->nome_medico', '$this->nome_paciente',  NULL);";
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
        $sql = "SELECT `id_agenda`, `data`, `hora`, `nome_medico`, `nome_paciente` FROM `Agendamento` WHERE nome_medico = '$_COOKIE[usuario]'";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }
    public function online() {
        $sql = 'SELECT `nome` FROM `Cadastro_Paciente` WHERE 1';
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
        return $this->id_agenda;
    }

     public function setId($id_agenda) {
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

    public function getPaciente() {
        return $this->nome_paciente;
    }

    public function setPaciente($nome_paciente) {
        $this->nome_paciente = $nome_paciente;
    }

    public function getMedico() {
        return $this->nome_medico;
    }

    public function setMedico($nome_medico) {
        $this->nome_medico = $nome_medico;
    }
    
}

