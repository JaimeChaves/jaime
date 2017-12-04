<?php
include_once("funcao.php");
include_once("modelo/Conexao.php");
include_once("modelo/Usuario.class.php");	


if(isset($_GET['sair'])){
Conexao::conectar();
setcookie("usuario", "valor", time()-3600);
setcookie("cor_preferida", "valor", time()-3600);
setcookie("dt_ult_acesso", "valor", time()-3600);
setcookie("destino", "Todos", time()-3600);
//mysqli_query(Conexao::$connection, "INSERT INTO conversas VALUES ('', 'Sistema','todos', 'O usuario $_COOKIE[usuario] deixou o chat!','".date("Y-m-d H:i")."', '".time()."')");
Conexao::desconectar();

}

if(isset($_POST['entrar'])){
Conexao::conectar();
$usuario = AntiSql($_POST['usuario']);
$senha = md5($_POST['senha']);

if(empty($usuario)){
Alertar("O campo USUARIO não pode ficar em Branco", 0);
exit;
}
if(empty($senha)){
Alertar("O campo SENHA não pode ficar em Branco", 0);
exit;
}




$sql = mysqli_query(Conexao::$connection, "SELECT * FROM `Cadastro_Medico` WHERE usuario='$usuario' AND senha='$senha' ");
$cont = mysqli_num_rows($sql);
$reSql = mysqli_fetch_assoc($sql);
if($cont == 0){
	echo "Seus dados não foram localizados. tente novamente. ";
	}else if($cont == 1 ){
	setcookie("usuario" ,ucfirst($usuario));
	echo "<script> location.href='index.php'; </script>";
	}else{
	echo "Ocorreu algum erro inesperado, tente novamente mais tarde";	
	}
	



}




if(!isset($_COOKIE['usuario'])){
echo "
<title>Prontuario</title>
<link rel='stylesheet' href='css/bootstrap.min.css' />
        <link rel='stylesheet' href='css/estilo.css' type='text/css' />
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<selection>        
<div ad='form' class='container'>
    <div ad='ad' class='row'>
        <div class='center-block'>
          <form action='logar.php' method='post'>
            <div ad='form' class='form-group'>
              <label for='exampleInputEmail1'>Usuario</label>
              <input type='text' class='form-control' id='usuario' name='usuario' placeholder='Usuario'>
            </div>
            <div class='form-group'>
              <label for='senha'>Senha</label>
              <input type='password' class='form-control' id='senha' name='senha' placeholder='Password'>
            </div>
          <div class='btn-group btn-group-justified' role='group' aria-label='...'>
            <div class='btn-group' role='group'>
              <button type='submit' name='entrar' id='entrar' class='btn btn-default'>Entrar</button>
          </div>
          <div class='btn-group btn-group-justified' role='group' aria-label='...'>
            <div class='btn-group' role='group'>
              <a href='cadastro_medico.php' class='btn btn-primary ' role='button'>Cadastrar Usuario</a>
          </div>
        </div>  
  </form>
  </selection>

</div>
</div>
</div>
";
}else{
echo "<script> location.href='index.php'; </script>";
}




?>