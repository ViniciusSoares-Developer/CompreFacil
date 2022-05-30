<?php

class Usuario{

    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;
    private $empresarial;

    public function __construct($nome, $email, $cEmail, $senha, $cSenha, $telefone, $endereco, $empresarial){
        $this->setNome($nome);
        $this->setEmail($email, $cEmail);
        $this->setSenha($senha, $cSenha);
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
    public function setEmail($email, $cEmail)
    {
        if($email == $cEmail){
            $this->email = $email;
        }

        return $this;
    }

    public function getSenha()
    {
        return sha1($this->senha);
    }
    public function setSenha($senha, $cSenha)
    {
        if($senha == $cSenha){
            $this->senha = $senha;
        }

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
        $this->empresarial = $empresarial;

        return $this;
    }
}