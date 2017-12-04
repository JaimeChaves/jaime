<?php

require_once "../modelo/Conexao.php";
require_once "../modelo/Medico.class.php";


class MedicoController{

    public function __construct(){
       call_user_func(array($this, $_REQUEST["evento"]));
   }

    public function cadastrar(){
        Conexao::conectar();
        $medico = new Medico();
        $medico->setNome($_POST['txtnome']);
        $medico->setEndereco($_POST['txtEndereco']);
        $medico->setBairro($_POST['txtBairro']);
        $medico->setCidade($_POST['txtCidade']);
        $medico->setEstado($_POST['txtEstado']);
        $medico->setCep($_POST['txtCep']);
        $medico->setComplemento($_POST['txtComplemento']);
        $medico->setCpf($_POST['txtCpf']);
        $medico->setRg($_POST['txtRg']);
        $medico->setDataNascimento($_POST['txtDataNascimento']);
        $medico->setNaturalidade ($_POST['txtNaturalidade']);
        $medico->setNacionalidade($_POST['txtNacionalidade']);
        $medico->setEmail($_POST['txtEmail']);
        $medico->setCelular($_POST['txtCelular']);
        $medico->setTelefone($_POST['txtComercial']);
        $medico->setTrabalho($_POST['txtTrabalho']);
        $medico->setEspecialidade($_POST['txtEspecialidade']);
        $medico->setCrm($_POST['txtCrm']);
        $medico->setUsuario($_POST['usuario']);
        $medico->setSenha($_POST['senha']);
        if ($medico->cadastrar())          
        Conexao::desconectar();

    print_r($medico);
    
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5;../index.php'>";
       
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


$medico = new MedicoController();


