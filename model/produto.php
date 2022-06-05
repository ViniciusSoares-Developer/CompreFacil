<?php

class Produto{
    private $idUsuario;
    private $nome;
    private $preco;
    private $descricao;
    private $detalhes;

    public function __construct($idUsuario, $nome, $preco, $descricao, $detalhes)
    {
        $this->setIdUsuario($idUsuario);
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setDescricao($descricao);
        $this->setDetalhes($detalhes);
    }
    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
    public function getDetalhes()
    {
        return $this->detalhes;
    } 
    public function setDetalhes($detalhes)
    {
        $this->detalhes = $detalhes;

        return $this;
    }

    public function cadastrar(){
        $sql = "INSERT INTO `produto`(`idUsuario`, `nome`, `preco`, `descricao`, `detalhes`)
        VALUES (:idUsuario, :nome, :preco, :descricao, :detalhes)";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':idUsuario', $this->getIdUsuario());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':preco', $this->getPreco());
        $stmt->bindValue(':descricao', $this->getDescricao());
        $stmt->bindValue(':detalhes', $this->getDetalhes());
        $stmt->execute();
    }
    public function remover($id){
        $sql = "DELETE FROM `produto` WHERE `id` LIKE :id";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
    public function listarPorIdUsuario($id){
        $sql = "SELECT * FROM `produto` WHERE `idUsuario` LIKE :id";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function listarPorNome($nome){
        $sql = "SELECT * FROM `produto` WHERE `nome` LIKE '%".$nome."%'";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        // var_dump($stmt);die;
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function listar(){
        $sql = "SELECT * FROM `produto`";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function buscarPorId($id){
        $sql = "SELECT * FROM `produto` WHERE `id` LIKE :id";
        $db = Database::conexao();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $item = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $item[0];
    }
}