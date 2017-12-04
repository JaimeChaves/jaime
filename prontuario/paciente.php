<?php
ob_start();
include_once("modelo/Conexao.php");


if(!isset($_COOKIE['usuario'])){
    Conexao::conectar();
echo "<script>location.href='logar.php'; </script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Exemplo de Formulário Utilizando o Bootstrap">
        <!-- <script src="//code.jquery.com/jquery.min.js"></script>-->
        <!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel='stylesheet' href='css/estilo.css' type='text/css' />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Clientes</title>
    </head>
    <body>
    <nav class="navbar">
            <div class="container-fluid ">
               <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Prontuario</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                     <li><a href="Cadastra.agenda.php">Agendar paciente</a></li>
                     <li><a href="atender_paciente.php">Atender paciente</a></li>
                     <li><a href="prontuario.php">Prontuario</a></li>
                     <li><a href="cadastro_paciente.php">Cadastrar paciente</a></li>
                 </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="logar.php?sair=0">Sair</a></li>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>

    <?php
    require_once "modelo/Conexao.php";
    require_once "modelo/Paciente.class.php";
    $total = 5;

    if($total < 10){
        Conexao::conectar();
        $paciente = new Paciente();
        $paciente = $paciente->listar();
        foreach ($paciente as $objeto) {
            
       ?>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-inverse">
                <tr>
                  <th>Nome</th>
                   <th>Prontuario</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo  "$objeto->nome_paciente" ?></td>
                   <td><a href='prontuario.php' class='btn btn-primary ' role='button'>Prontuario</a></td>
                </tr>   
          </table>
        </div>            
<?php 
        }

        Conexao::desconectar();
   }

?>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
			$(function() {
				$('[data-toggle="tooltip"]').tooltip();
			});
        </script>
    </body>
</html>