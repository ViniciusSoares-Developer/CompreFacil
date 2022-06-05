<?php
include_once "./model/conexao.php";
include_once "./model/usuario.php";
include_once "./model/produto.php";
include_once "./controller/controllerUsuario.php";
include_once "./controller/controllerProduto.php";

$pagina = ($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET['pagina'])) ? $_GET['pagina'] : 1;
$pesquisa = ($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET['pesquisa'])) ? $_GET['pesquisa'] : "";
$logout = ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['logout'])) ? $_GET['logout'] : null;
$usuarioId = ( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id']) ) ? $_GET['id'] : null;

$logado = isset($_SESSION['logado']);

if ($logout) {
    session_unset();
    header('Location: ?pagina=1');
}

include_once "./view/templates/header.php";
if ($pagina == 1) {
    include_once "./view/main.php";
} else if ($pagina == 2) {
    include_once "./view/registroUsuario.php";
} else if ($pagina == 3) {
    include_once "./model/produto.php";
    include_once "./controller/controllerProduto.php";
    include_once "./view/pesquisa.php";
} else if ($pagina == 4) {
    include_once "./model/produto.php";
    include_once "./controller/controllerProduto.php";
    include_once "./view/perfilProduto.php";
} else if($usuarioId && $logado && $_SESSION['user'][2] == 1 && $pagina == 5 ){
    include_once "./model/produto.php";
    include_once "./controller/controllerProduto.php";
    include_once "./view/registroProduto.php";
} else if($pagina == 6){
    include_once "./model/produto.php";
    include_once "./controller/controllerProduto.php";
    include_once "./view/perfilUsuario.php";
}
include_once "./view/templates/footer.php";
