<?php
ob_start();
include_once("modelo/Conexao.php");
include_once("modelo/Anamnese.class.php");
require_once "modelo/Agenda.class.php";
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
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exemplo de Formulário</title>
    </head>
    <body>
    <section>
        <nav class="navbar navbar-default">
            <div class="container-fluid ">
               <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
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
        </section>

        <form action='controle/Anamnese.controle.php' method='post'>
            <div class="row">
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                     <label>Paciente:</label>
                            <select id="txtPaciente" name="txtPaciente" class="form-control" style="width: 100%;">
                                <?php
                                Conexao::conectar();
                                $agenda = new Agenda();
                                $agenda = $agenda->listar(); 
                                foreach ($agenda as $objeto) {
                                ?>
                                <option id="txtPaciente" name="txtPaciente"><?php echo "$objeto->id_agenda" ?> </option>
                                <?php
                            }
                                ?>
                             </select>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtqueixa">Queixa principal</label>
                    <input type="text" class="form-control" name="txtqueixa" id="txtqueixa" placeholder="Digite seu nome completo">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txthistorico">Histórico</label>
                    <input type="text" class="form-control" id="txthistorico" name="txthistorico" placeholder="Digite seu endereço">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtrenais"> Problema renais</label>
                    <input type="text" class="form-control" id="txtrenais" name="txtrenais" placeholder="Digite seu bairro">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtcardicos">Problema cardícos</label>
                    <input type="text" class="form-control" id="txtcardicos" name="txtcardicos" placeholder="Digite seu Estado">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtarticulares">Problema articulares</label>
                    <input type="text" class="form-control" id="txtarticulares" name="txtarticulares" placeholder="Digite seu bairro">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtrespiratorio">Problema respitórios</label>
                    <input type="text" class="form-control" id="txtrespiratorio" name="txtrespiratorio" placeholder="Digite seu cep">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtgastrico">problema gástrico</label>
                    <input type="text" class="form-control" id="txtgastrico" name="txtgastrico" placeholder="Digite um complemento">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtgastrico">Alergias</label>
                    <input type="text" class="form-control" id="Alergia" name="alergia" placeholder="Digite um complemento">
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
                    <!-- Painel Default -->
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Hepatite</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" id="Hepatite1" name="Hepatite" value="sim" checked="">
                                        Sim 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="Hepatite2" name="Hepatite" value="nao">
                                        Não 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
                    <!-- Painel Default -->
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Gravidez</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" id="Gravidez1" name="Gravidez" value="sim" checked="">
                                        Sim 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="Gravidez2" name="Gravidez" value="nao">
                                        Não 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
                    <!-- Painel Default -->
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Diabetes</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" id="Diabetes1" name="Diabetes" value="sim" checked="">
                                        Sim 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="Diabetes2" name="Diabetes" value="nao">
                                        Não 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
                    <!-- Painel Default -->
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Problemas de cicatrizacão</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" id="cicatrizacão1" name="cicatrizacao" value="sim" checked="">
                                        Sim 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="cicatrizacão" name="cicatrizacao" value="nao">
                                        Não 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                <label for="medicamento">Medicamentos</label>
                <input type="text" class="form-control" id="medicamento" name="medicamento" placeholder="Digite um complemento">
            </div>     
        </div>         
            <input type="hidden" name="evento" value="cadastrar">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3 ">
                    <button id="btnEnvia" class="btn btn-success">
                        Salvar
                    </button>
                </div>
            </div>     
    </form>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>