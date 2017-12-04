<?php
include_once("modelo/Conexao.php");
include_once("modelo/Usuario.class.php"); 


if(isset($_POST['cadastrar'])){
	if($_POST['email'] == ""){
	echo "O campo nome nao pode ficar vazio.";
	}else if($_POST['usuario'] == ""){
	echo "O campo nome nao pode ficar vazio.";
	}else if($_POST['senha'] == ""){
	echo "O campo nome nao pode ficar vazio.";
	}else {
	$cadastrar = new Usuario;
  Conexao::conectar();
	$cadastrar->Cadastrar($_POST['email'], $_POST['usuario'], $_POST['senha']);
	}
}
?>
<link rel='stylesheet' href='css/bootstrap.min.css' />
<link rel='stylesheet' href='css/estilo.css' type='text/css' />
<div class="container">
    <div class="row">
        <div class="center-block">
<form class="form-horizontal" action='cad_usu.php' method='post' role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="email" class="form-control" id='email' name='email' placeholder="Seu email">
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="user">Usuario:</label>
    <div class="col-sm-10"> 
    <div class="input-group">
      <span class="input-group-addon">User</span>
      <input type="text" class="form-control" id='usuario' name='usuario' placeholder="Seu Usuario">
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
    <div class="input-group">
      <span class="input-group-addon">*****</span>
      <input type="password" class="form-control" id='senha' name='senha' placeholder="******">
    </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name='cadastrar' id='cadastrar' class="btn btn-default">Cadastrar Usuario</button>
    </div>
  </div>
</form>
</div>
</div>
</div>