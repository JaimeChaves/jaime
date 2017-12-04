<?php

require_once "../modelo/Conexao.php";
require_once "../modelo/Sinais.class.php";


class SinaisController{

    public function __construct(){
       call_user_func(array($this, $_REQUEST["evento"]));
   }

    public function cadastrar(){
        Conexao::conectar();
        $sinais = new Sinais();
        $sinais->setIdAgenda($_POST['txtPaciente']);
        $sinais->setData($_POST['txtdata']);
        $sinais->setHora($_POST['txthora']);
        $sinais->setAltura($_POST['txtaltura']);
        $sinais->setPeso($_POST['txtpeso']);
        $sinais->setImc($_POST['txtimc']);
        $sinais->setTemperatura($_POST['txttemperatura']);
        $sinais->setDor($_POST['txtdor']);
        if ($sinais->cadastrar())          
        Conexao::desconectar();
    echo "Cadastrado com sucesso";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;../atender_paciente.php'>";
    //echo "<meta HTTP-EQUIV='refresh' CONTENT='2;../index.php'>";
       
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


$sinais = new SinaisController();


