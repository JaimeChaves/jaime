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
        <title>Cadastrar Clientes</title>
    </head>
    <body>
        <!--seção 1 -->
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
            <form action='controle/Paciente.controle.php' method='post'>
            <div class="row">
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtNome">Nome completo</label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Digite seu nome completo">
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
                    <select id="txtCidade" name="txtCidade" class="form-control" style="width: 100%;">
                     		<option selected="" value="">Selecione o Estado (UF)</option>
							<option value="Acre">Açalandia</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option>
                    </select>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtCidade">Estado</label>
                    <select id="txtCidade" name="txtCidade" class="form-control" style="width: 100%;">
                     		<option selected="" value="">Selecione o Estado (UF)</option>
							<option value="Acre">Acre</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option>
                    </select>
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
                    <input type="number" class="form-control" id="txtDataNascimento" name="txtDataNascimento" placeholder="00/00/0000">
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
                    <input type="email" class="form-control" id="Email" name="txtEmail" placeholder="ex: exemplo@seuemail.com">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2 ">
                    <label for="txtCelular">Tel. Celular</label>
                    <input type="text" class="form-control" id="txtCelular" name="txtCelular" placeholder="(00)00000-0000">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtTelefone">Tel. Trabalho</label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" placeholder="(00)0000-0000">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="txtNomeMae">Nome da mãe</label>
                    <input type="text" class="form-control" id="txtNomeMae" name="txtNomeMae" placeholder="Digite nome da mãe completo">
                </div>
                 <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-4 ">
                    <label for="nomepai">Nome do pai</label>
                    <input type="text" class="form-control" id="nomepai" name="nomepai" placeholder="Digite nome do pai completo">
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