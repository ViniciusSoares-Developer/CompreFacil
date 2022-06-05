<?php
@include '../model/conexao.php';
@include '../model/produto.php';

$idUsuario = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id']))? $_POST['id'] : null;
$nome = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nome']))? $_POST['nome'] : null;
$preco = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['preco']))? $_POST['preco'] : null;
$descricao = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['descricao']))? $_POST['descricao'] : null;
$detalhes = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['detalhe']))? $_POST['detalhe'] : null;
$image = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['image']))? $_POST['image'] : null;

$tela = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['tela']))? $_POST['tela'] : null;
$pesquisa = ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['pesquisa']))? $_GET['pesquisa'] : null;
$idu = ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['idu']))? $_GET['idu'] : null;
$idp = ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['idp']))? $_GET['idp'] : null;

if($tela == 'produtoRegistro'){
    $produtoOBJ = new Produto($idUsuario, $nome, $preco, $descricao, $detalhes);
    $produtoOBJ->cadastrar();
    header('Location: http://localhost/Projects/ProjetoIntegrador/?pagina=5&id=1');
}

if(!$tela){
    $produtoOBJ = new Produto($idUsuario, $nome, $preco, $descricao, $detalhes);
    if($pesquisa){
        $listaProdutos = $produtoOBJ->listarPorNome($pesquisa);
    }
    else if($idp){
        $produto = $produtoOBJ->buscarPorId($idp);
    }
    else if($idu){
        $listaProdutos = $produtoOBJ->listarPorIdUsuario($idu);
    }
    else{
        $listaProdutos = $produtoOBJ->listar(); 
    }
}