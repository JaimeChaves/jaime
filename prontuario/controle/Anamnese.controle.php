<?php

require_once "../modelo/Conexao.php";
require_once "../modelo/Anamnese.class.php";


class AnamneseController{

    public function __construct(){
       call_user_func(array($this, $_REQUEST["evento"]));
   }

    public function cadastrar(){
        Conexao::conectar();
        $anamnese = new Anamnese();
        $anamnese->setIdAgenda($_POST['txtPaciente']);
        $anamnese->setQueixa($_POST['txtqueixa']);
        $anamnese->setHistorico($_POST['txthistorico']);
        $anamnese->setRenais($_POST['txtrenais']);
        $anamnese->setCardico($_POST['txtcardicos']);
        $anamnese->setArticulares($_POST['txtarticulares']);
        $anamnese->setRespiratorio($_POST['txtrespiratorio']);
        $anamnese->setGastrico($_POST['txtgastrico']);
        $anamnese->setAlergia($_POST['alergia']);
        $anamnese->setHepatite($_POST['Hepatite']);
        $anamnese->setGravidez($_POST['Gravidez']);
        $anamnese->setDiabete($_POST['Diabetes']);
        $anamnese->setCicatrizacao($_POST['cicatrizacao']);
        $anamnese->setMedicamento($_POST['medicamento']);
        if ($anamnese->cadastrar())          
        Conexao::desconectar();
   echo "Cadastrado com sucesso";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;../atender_paciente.php'>";
       
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


$anamnese = new AnamneseController();


