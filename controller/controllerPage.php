<?php

$pagina = ( $_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET['pagina']) ) ? $_GET['pagina'] : 1;
$pesquisa = ( $_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET['pesquisa']) ) ? $_GET['pesquisa'] : "";
$logout = ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['logout'])) ? $_GET['logout'] : null;
session_start();
$usuarioLogado = isset($_SESSION['usuario'])?$_SESSION['usuario']:null;

$estadosBrasileiros = array(
    'Acre',
    'Alagoas',
    'Amapá',
    'Amazonas',
    'Bahia',
    'Ceará',
    'Distrito Federal',
    'Espírito Santo',
    'Goiás',
    'Maranhão',
    'Mato Grosso',
    'Mato Grosso do Sul',
    'Minas Gerais',
    'Pará',
    'Paraíba',
    'Paraná',
    'Pernambuco',
    'Piauí',
    'Rio de Janeiro',
    'Rio Grande do Norte',
    'Rio Grande do Sul',
    'Rondônia',
    'Roraima',
    'Santa Catarina',
    'São Paulo',
    'Sergipe',
    'Tocantins'
);

if($logout){
    unset($_SESSION['usuario']);
    header(sprintf('Location: %s', $_SERVER['HTTP_REFERER']));
}

include_once "./view/templates/header.php";
if($pagina == 1){
    include_once "./view/main.php";
}
else if($pagina == 2){
    include_once "./model/conexao.php";
    include_once "./model/usuario.php";
    include_once "./controller/controllerUsuario.php";
    include_once "./view/registroUsuario.php";
}
else if($pagina == 3){
    include_once "./view/pesquisa.php";
}
include_once "./view/templates/footer.php";

?>