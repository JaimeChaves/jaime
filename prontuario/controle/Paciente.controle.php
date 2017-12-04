<?php

require_once "../modelo/Conexao.php";
require_once "../modelo/Paciente.class.php";


class PacienteController{

    public function __construct(){
       call_user_func(array($this, $_REQUEST["evento"]));
   }

    public function cadastrar(){
        Conexao::conectar();
        $paciente = new Paciente();
        $paciente->setNome($_POST['txtNome']);
        $paciente->setEndereco($_POST['txtEndereco']);
        $paciente->setBairro($_POST['txtBairro']);
        $paciente->setCidade($_POST['txtCidade']);
        $paciente->setEstado($_POST['txtEstado']);
        $paciente->setCep($_POST['txtCep']);
        $paciente->setComplemento($_POST['txtComplemento']);
        $paciente->setCpf($_POST['txtCpf']);
        $paciente->setRg($_POST['txtRg']);
        $paciente->setDataNascimento($_POST['txtDataNascimento']);
        $paciente->setNaturalidade ($_POST['txtNaturalidade']);
        $paciente->setNacionalidade($_POST['txtNacionalidade']);
        $paciente->setEmail($_POST['txtEmail']);
        $paciente->setCelular($_POST['txtCelular']);
        $paciente->setTelefone($_POST['txtTelefone']);
        $paciente->setNomeMae($_POST['txtNomeMae']);
        $paciente->setNomePai($_POST['nomepai']);
        if ($paciente->cadastrar())          
        Conexao::desconectar();
        echo "<meta HTTP-EQUIV='refresh' CONTENT='3;../cadastro_paciente.php'>";
       
    }

    public function excluir(){
        Conexao::conectar();
        $funcionario = new Funcionario();
        $funcionario->setMatricula($_GET["matricula"]);
        if ($funcionario->excluir())
            echo "<script>alert('Operação realizada com sucesso.');</script>";
        else
            echo "<script>alert('Falha ao executar esta operação.');</script>";

        Conexao::desconectar();

        $this->listar();
    }

    public function editar(){
        Conexao::conectar();
        $funcionario = new Funcionario();
        $funcionario->setMatricula($_POST["matricula"]);
        $funcionario->setNome($_POST["nome"]);
        $funcionario->setCpf($_POST["cpf"]);
        $funcionario->setCargo($_POST["cargo"]);
        if ($funcionario->editar())
            echo "<script>alert('Operação realizada com sucesso.');</script>";
        else
            echo "<script>alert('Falha ao executar esta operação.');</script>";

        Conexao::desconectar();
    }

    public function listar(){
        Conexao::conectar();
        $chat = new Chat();
        $lista = $chat->listar();
        foreach ($lista as $objeto) {
            echo " $objeto->nome $objeto->mensagem  <br/>";
        }
        Conexao::desconectar();
     } 

}

$paciente = new PacienteController();


