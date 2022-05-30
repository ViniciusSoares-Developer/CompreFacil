<body>
    <header>
        <nav>
            <section class="d-flex align-items-center">
                <a href="?pagina=1"><img src="./assets/imagens/50x50.png" alt=""></a>
                <label for="">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="pesquisar">
                    <a href="" onclick="this.href='?pagina=3&pesquisa='+document.getElementById('pesquisa').value">
                        <button type="button">
                            <li class="fa fa-search"></li>
                        </button>
                    </a>
                </label>
            </section>
            <?php if (!$usuarioLogado) : ?>
                <section>
                    <ul>
                        <li>
                            <button type="button" name="acessarConta" data-bs-toggle="modal" data-bs-target="#telaLogin">
                                Acessar conta
                            </button>
                        </li>
                        <li><a href="?pagina=2"><button type="button" name="criarConta">Registrar</button></a></li>
                    </ul>
                </section>
            <?php else : ?>
                <section class="usuarioViewHeader d-flex align-items-center">
                    <img src="http://via.placeholder.com/50x50" alt="">
                    <div>
                        <span>User name</span>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Opções
                            </a>
    
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configurações</a></li>
                                <?php if($usuarioLogado['empresarial'] == 1):?>
                                    <li><a class="dropdown-item" href="#">Novo item</a></li>
                                <?php endif;?>
                                <li><a class="dropdown-item" href="?logout=true">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </nav>
        <div class="modal fade" id="telaLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./controller/controllerUsuario.php" method="POST" class="d-flex flex-column">
                            <input type="text" name="email" id="" placeholder="E-mail" required>
                            <section>
                                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                                <button type="button" onclick="visiblePassword()"><i class="fa fa-eye" id="iconSenha"></i></button>
                            </section>
                            <input type="hidden" name="tela" value="usuarioLogin">
                            <input type="submit" value="Entrar" placeholder="password">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>