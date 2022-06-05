<?php

class Usuario{

    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;
    private $empresarial;

    public function __construct($nome, $email, $senha, $telefone, $endereco, $empresarial){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setTelefone($telefone);
        $this->setEndereco($endereco);
        $this->setEmpresarial($empresarial);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSenha()
    {
        return sha1($this->senha);
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getEmpresarial()
    {
        return $this->empresarial;
    }
    public function setEmpresarial($empresarial)
    {
        if($empresarial){
            $this->empresarial = true;
        }
        else{
            $this->empresarial = false;
        }

        return $this;
    }

    public function criarConta(){
        $sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`, `telefone`, `endereco`, `empresarial`)
        VALUES (':nome', ':email', ':senha', ':telefone', ':endereco', ':empresarial')";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':telefone', $this->getTelefone());
        $stmt->bindValue(':endereco', $this->getEndereco());
        $stmt->bindValue(':empresarial', $this->getEmpresarial());
        $stmt->execute();
    }
    public function buscarPorEmail($email){
        $sql = "SELECT * FROM `usuario` WHERE `email` LIKE :email";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($list){
            if($list[0]['email'] == $this->getEmail() && $list[0]['senha'] == $this->getSenha()){
                return $list[0];
            }
        }
    }
}