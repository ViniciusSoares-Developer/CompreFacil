<?php

@include_once '../model/conexao.php';
@include_once '../model/usuario.php';

$nome = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$email = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email'])) ? $_POST['email'] : null;
$cEmail = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['confirmEmail'])) ? $_POST['confirmEmail'] : null;
$senha = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['senha'])) ? $_POST['senha'] : null;
$cSenha = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['confirmSenha'])) ? $_POST['confirmSenha'] : null;
$telefone = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$estado = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['estado'])) ? $_POST['estado'] : null;
$cidade = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['cidade'])) ? $_POST['cidade'] : null;
$rua = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['rua'])) ? $_POST['rua'] : null;
$numero = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['numero'])) ? $_POST['numero'] : null;
$diretriz = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['diretriz'])) ? $_POST['diretriz'] : null;
$empresarial = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['empresarial'])) ? $_POST['empresarial'] : null;

$tela = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['tela'])) ? $_POST['tela'] : null;

if($tela == 'usuarioRegistro' && $diretriz == 'on'){
    $endereco = "$rua, $numero, $cidade - $estado";
    $usuarioOBJ = new Usuario($nome, $email, $cEmail, $senha, $cSenha, $telefone, $endereco, $empresarial);
    $usuarioOBJ->criarConta();
    header('Location: http://localhost/Projects/ProjetoIntegrador/');
}else if($tela == 'usuarioLogin'){
    $usuarioOBJ = new Usuario(null, $email, $email, $senha, $senha, null, null, null);
    session_start();
    $_SESSION['usuario'] = $usuarioOBJ->buscarPorEmail($email);
    header(sprintf('Location: %s', $_SERVER['HTTP_REFERER']));
}