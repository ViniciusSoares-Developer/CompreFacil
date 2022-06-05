<?php
session_start();

@include_once '../model/conexao.php';
@include_once '../model/usuario.php';

$nome = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$email = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email'])) ? $_POST['email'] : null;
$cEmail = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['confirmEmail'])) ? $_POST['confirmEmail'] : null;
$senha = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['senha'])) ? $_POST['senha'] : null;
$cSenha = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['confirmSenha'])) ? $_POST['confirmSenha'] : null;
$telefone = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$cep = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['cep'])) ? $_POST['cep'] : null;
$numero = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['numero'])) ? $_POST['numero'] : null;
$diretriz = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['diretriz'])) ? $_POST['diretriz'] : null;
$empresarial = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['empresarial'])) ? $_POST['empresarial'] : null;

$tela = ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['tela'])) ? $_POST['tela'] : null;

if($tela == 'usuarioRegistro' && $diretriz == 'on'){
    if($email == $cEmail && $senha == $cSenha){
        $usuarioOBJ = new Usuario($nome, $email, $senha, $telefone, $cep, $empresarial);
        $usuarioOBJ->criarConta();
    }
    header('Location: http://localhost/Projects/ProjetoIntegrador/?pagina=1');
}else if($tela == 'usuarioLogin'){
    $usuarioOBJ = new Usuario(null, $email, $senha, null, null, null);
    $usuario = $usuarioOBJ->buscarPorEmail($email);
    $_SESSION['logado'] = $usuario?true:null;
    if(isset($usuario)){
        $_SESSION['user'] = [$usuario['id'], $usuario['nome'], $usuario['empresarial']];
    }

    header('Location: http://localhost/Projects/ProjetoIntegrador/?pagina=1');
}