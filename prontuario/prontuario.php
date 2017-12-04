<?php
ob_start();
include_once("modelo/Conexao.php");
include_once("funcao.php");

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
    <nav class="navbar navbar-default">
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
    require_once "modelo/Prontuario.class.php";
    ?>
    <form action='' method='post'>
    <div class="col-md-">
         <div class="form4-group">
            <label>Paciente:</label>
              <select id="txtPaciente" name="txtPaciente" class="form-control" style="width: 100%;">
                <?php
                Conexao::conectar();
                $agenda = new Prontuario();
                $agenda = $agenda->listar(); 
                foreach ($agenda as $objeto) {
                ?>
                <option id="txtPaciente" name="txtPaciente"><?php echo "$objeto->nome_paciente" ?> </option>
                <?php
                }
                ?>
              </select>
         </div>
       <p><input type="hidden" name="evento" value="listar">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 ">
                    <button id="btnEnvia" name="enviar" class="btn btn-success">
                        Buscar
                    </button>
                </div>
            </div> 
          </p>  
         </div>
    
    </form>
     
     
       <?php
      if(isset($_POST['enviar'])){
       $prontuario = new Prontuario();
       $prontuario->setId($_POST["txtPaciente"]);
        $prontuario = $prontuario->ListarProntuario();
        foreach ($prontuario as $objeto) {
       ?>
       <p><button type="submit" class="btn btn-info" data-toggle="collapse" data-target="#paciente"><? print_r("$objeto->nome_paciente") ; ?></button></p>
         <div class="container">
       <div id="paciente" class="collapse">
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#Anamnese">Anamnese</button>
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#Sinais">Sinais</button>
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#hipotese">Hipótese Diagnostico</button>
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#prescricao">Prescrição</button>
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#evolucao">Evolução</button>
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#atestado">Atestado</button>
        <div id="Anamnese" class="collapse">
          <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Numero atendimento</label>
          <input class="form-control" type="text" name="" value="<? echo "$objeto->id_agendamento"; ?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Queixa</label>
            <input class="form-control" type="text" name="" value="<?php echo "$objeto->queixa_principal"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">historico</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->historico"?>">
      </div>
       <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Renas</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->problemas_renais"?>">
      </div>
       <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Cardicos</label>
           <input class="form-control" type="text" name="" value="<?php echo "$objeto->problemas_cardiacos "?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Articlulares</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->problemas_articulares"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Respiratorios</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->problemas_respiratorios"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Gastrico</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->problemas_gastricos "?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Hepatite</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->hepatite"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Gravidez</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->gravidez"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas Diabetes</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->diabetes"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Problemas de Cicatrização </label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->problemas_de_cicatrizacao"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Ultiliza Medicamentos</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->ultiliza_medicamentos"?>">
      </div>  
    </div>
    
    <div id="Sinais" class="collapse">
  <?php 
       /* }
        $sinais = new Prontuario();
        $sinais = $sinais->Sinais();
        foreach ($sinais as $objeto) {*/
   ?>
          <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Numero atendimento</label>
          <input class="form-control" type="text" name="" value="<? echo "$objeto->id_agendamento"; ?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Data</label>
            <input class="form-control" type="text" name="" value="<?php echo "$objeto->data"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Hora</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->hora"?>">
      </div>
       <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Altura</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->altura"?>">
      </div>
       <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Peso</label>
           <input class="form-control" type="text" name="" value="<?php echo "$objeto->peso"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Imc</label>
           <input class="form-control" type="text" name="" value="<?php echo "$objeto->IMC"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Temperatura</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->temperatura"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Dor</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->dor"?>">
      </div>
    </div>
    <div id="hipotese" class="collapse">
  <?php 
    
        /*$hipotese = new Prontuario();
        $hipotese = $hipotese->Hipotese();
        foreach ($hipotese as $objeto) {*/
   ?>
          <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Numero atendimento</label>
          <input class="form-control" type="text" name="" value="<? echo "$objeto->id_agendamento"; ?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Hipótese Diagnostico</label>
            <input class="form-control" type="text" name="" value="<?php echo "$objeto->hipotese"?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Observação</label>
          <input class="form-control" type="text" name="" value="<?php echo "$objeto->observacao"?>">
      </div>
      </div>
       <div id="prescricao" class="collapse">
  <?php 
    
     /*   $prescricao = new Prontuario();
        $prescricao = $prescricao->Prescricao();
        foreach ($prescricao as $objeto) { */
   ?>
          <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Numero atendimento</label>
          <input class="form-control" type="text" name="" value="<? echo "$objeto->id_agendamento"; ?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-6 col-lg-6 ">
          <label for="txtData">Prescrição</label>
            <textarea class="form-control" type="text" name="""><?php echo "$objeto->presquicao"?></textarea>
      </div>
      </div>
      <div id="evolucao" class="collapse">
  <?php 
    /*}
       $evolucao = new Prontuario();
        $evolucao = $evolucao->Evolucao();
        foreach ($evolucao as $objeto) { */
   ?>
          <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Numero atendimento</label>
          <input class="form-control" type="text" name="" value="<? echo "$objeto->id_agendamento"; ?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-6 col-lg-6 ">
          <label for="txtData">Evolução</label>
            <textarea class="form-control" type="text" name=""><?php echo "$objeto->evolucao"?></textarea>
      </div>
      </div>
      <div id="atestado" class="collapse">
  <?php 
    
       /* $atestado = new Prontuario();
        $atestado = $atestado->Atestado();
        foreach ($atestado as $objeto) { */
   ?>
          <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Numero atendimento</label>
          <input class="form-control" type="text" name="" value="<? echo "$objeto->id_agendamento"; ?>">
      </div>
      <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
          <label for="txtData">Atestado</label>
            <textarea class="form-control" type="text" name=""><?php echo "$objeto->atestado"?></textarea>
      </div>
      </div>
  

        <?php 
              }
                Conexao::desconectar();
           }

        ?>
        </div>
        </div>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
			$(function() {
				$('[data-toggle="tooltip"]').tooltip();
			});
        </script>
    </body>
</html>