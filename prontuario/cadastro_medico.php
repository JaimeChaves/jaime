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
        <!--seção 1 -->
        <nav class="navbar navbar-default">
            <div class="container-fluid navbar-inverse">
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
                    <li><a href="agenda_paciente.php">Agenda</a></li>
                      <li><a href="paciente.php">paciente</a></li>
                 </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="logar.php?sair=0">Sair</a></li>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
         </nav>
            <!-- Nesta seção temos o nome e o email -->
            <form action='controle/Medico.controle.php' method='post'>
            <div class="row">
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" name="txtnome" id="txtnome" placeholder="Digite seu nome completo">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtEndereco">Endereço</label>
                    <input type="text" class="form-control" id="txtEndereco" name="txtEndereco" placeholder="Digite seu endereço">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtBairro">Bairro</label>
                    <input type="text" class="form-control" id="txtBairro" name="txtBairro" placeholder="Digite seu bairro">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtCidade">Cidade</label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade" placeholder="Digite seu bairro">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtEstado">Estado</label>
                    <input type="text" class="form-control" id="txtEstado" name="txtEstado" placeholder="Digite seu Estado">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtCep">Cep</label>
                    <input type="text" class="form-control" id="txtCep" name="txtCep" placeholder="Digite seu cep">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtComplemento">Complemento</label>
                    <input type="text" class="form-control" id="txtComplemento" name="txtComplemento" placeholder="Digite um complemento">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtCpf">CPF</label>
                    <input type="text" class="form-control" id="txtCpf" name="txtCpf" placeholder="Digite seu CPF">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtRg">RG</label>
                    <input type="text" class="form-control" id="txtRg" name="txtRg" placeholder="Digite seu RG">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-sm-offset-3 col-md-offset-0">
                    <label for="txtDataNascimento">Data Nascimento</label>
                    <input type="text" class="form-control" id="txtDataNascimento" name="txtDataNascimento" placeholder="00/00/0000">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
                    <label for="txtNaturalidade">Naturalidade</label>
                    <input type="text" class="form-control" id="txtNaturalidade" name="txtNaturalidade" placeholder="Digite sua naturalidade">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
                    <label for="txtNacionalidade">Nacionalidade</label>
                    <input type="text" class="form-control" id="txtNacionalidade" name="txtNacionalidade" placeholder="Digite sua nacionalidade">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4">
                    <label for="txtEmail">Email</label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="ex: exemplo@seuemail.com">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2 ">
                    <label for="txtCelular">Tel. Celular</label>
                    <input type="text" class="form-control" id="txtCelular" name="txtCelular" placeholder="(00)00000-0000">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtComercial">Tel. Comercial</label>
                    <input type="text" class="form-control" id="txtComercial" name="txtComercial" placeholder="(00)0000-0000">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3">
                    <label for="txtTrabalho">Trabalho</label>
                    <input type="text" class="form-control" id="txtTrabalho" name="txtTrabalho" placeholder="Digite o Trabalho">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3 ">
                    <label for="txtEspecialidade">Especialidade</label>
                    <input type="text" class="form-control" id="txtEspecialidade" name="txtEspecialidade" placeholder="Digite a especialidade">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2 ">
                    <label for="txtRrm">CRM</label>
                    <input type="text" class="form-control" id="txtCrm" name="txtCrm" placeholder="Digite o CRM">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2 ">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2 ">
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="senha">
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