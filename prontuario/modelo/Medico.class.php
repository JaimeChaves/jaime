<?php

class Medico{
   private $nome;
   private $endereco;
   private $bairro;
   private $cidade;
   private $estado;
   private $cep;
   private $complemento;
   private $cpf;
   private $rg;
   private $data_nascimento;
   private $naturalidade;
   private $nacionalidade;
   private $email;
   private $celular;
   private $telefone;
   private $trabalho;
   private $especialidade;
   private $crm;
   private $usuario;
   private $senha;


    public function cadastrar() {

        $sql = " INSERT INTO `Cadastro_Medico` (`id_medico`, `medico`, `endereço`, `bairro`, `estado`, `cep`, `complemento`, `cpf`, `rg`, `data_de_nascimento`, `naturalidade`, `nacionalidade`, `telefones`, `celular`, `trabalho`, `especialidades`, `crm`, `horario_de_servico`, `usuario`, `email`, `senha`) VALUES (NULL,'$this->nome' , '$this->endereco', '$this->bairro', '$this->cidade', '$this->estado', '$this->cep', '$this->complemento', '$this->cpf', '$this->rg', '$this->data_nascimento', '$this->naturalidade', '$this->nacionalidade', '$this->celular', '$this->telefone', '$this->trabalho', '$this->especialidade', '$this->crm', '$this->usuario', '$this->email', '$this->senha')";
        if (mysqli_query(Conexao::$connection, $sql))
            return true;
        else
            return false;
    }

    public function editar() {
        $sql = "update usuario set nome = '{$this->nome}', login = '{$this->login}', senha = '{$this->senha}' where id = '{$this->id}'";
        if (mysql_query($sql))
            return true;
        else
            return false;
    }

    public function listar() {
        $sql = "select * from usuario";
        $res = mysql_query($sql);

        while ($objeto = mysql_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }

    /*public static function getUsuario($id) {
        $sql = "select * from usuario where id = '$id'";
        $res = mysql_query($sql);
        $usuario = mysql_fetch_object($res);
        return $usuario;
    }*/

    public function excluir() {
        $sql = "delete from usuario where id = '{$this->id}'";
        if (mysql_query($sql))
            return true;
        else
            return false;
    }
     public function getId() {
        return $this->id;
    }

     public function setId($id) {
        $this->id = $id;
    }

   public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

      public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

      public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

      public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

      public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

     public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }


    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTrabalho() {
        return $this->trabalho;
    }

    public function setTrabalho($trabalho) {
        $this->trabalho = $trabalho;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getCrm() {
        return $this->crm;
    }

    public function setCrm($crm) {
        $this->crm = $crm;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }  

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    } 

}

