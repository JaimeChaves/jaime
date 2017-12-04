<?php

class Paciente{
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
   private $nomemae;
   private $nomepai;
   


    public function cadastrar() {

        $sql = "INSERT INTO `paciente` (`id`, `nome_paciente`, `endereço`, `bairro`, `cidade`, `estado`, `cep`, `complemento`, `cpf`, `rg`, `data_nacismento`, `naturalidade`, `nacionalidade`, `email`, `celular`, `telefone`, `nomemae`, `nomepai`) VALUES (NULL, '$this->nome', '$this->endereço', '$this->bairro', '$this->cidade', '$this->estado', '$this->cep', '$this->complemento', '$this->cpf', '$this->rg', '$this->data_nascimento', '$this->naturalidade', '$this->nacionalidade', '$this->email', '$this->celular', '$this->telefone', '$this->nomemae', '$this->nomepai')";
            echo "cadastrado com sucesso";
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
        $sql = "SELECT `id_agenda`, `data`, `hora`, `nome_medico`, `nome_paciente`, `id_atender` FROM `Agendamento` WHERE nome_medico = '$_COOKIE[usuario]'";
        $res = mysqli_query(Conexao::$connection, $sql);

        while ($objeto = mysqli_fetch_object($res))
            $lista[] = $objeto;
        if ($lista == null)
            echo "<script>alert('Nenhum registro encontrado');</script>";
        else
            return $lista;
    }

    public static function getUsuario($id) {
        $sql = "select * from usuario where id = '$id'";
        $res = mysql_query($sql);
        $usuario = mysql_fetch_object($res);
        return $usuario;
    }

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

    public function getNomeMae() {
        return $this->nomemae;
    }

    public function setNomeMae($nomemae) {
        $this->nomemae = $nomemae;
    }

    public function getNomePai() {
        return $this->nomepai;
    }

    public function setNomePai($nomepai) {
        $this->nomepai = $nomepai;
    }

  

}

