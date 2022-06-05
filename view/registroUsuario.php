<main>
    <form action="./controller/controllerUsuario.php" method="post">
        <input type="text" name="nome" id="" placeholder="Nome de usuario" required>
        <input type="email" name="email" id="" placeholder="Email" required>
        <input type="email" name="confirmEmail" autocomplete="none" placeholder="Confirmar email" required>
        <input type="text" name="telefone" id="" placeholder="Telefone">
        <input type="text" name="cep" id="" placeholder="CEP" required>
        <input type="password" name="senha" id="" placeholder="Senha" required>
        <input type="password" name="confirmSenha" id="" placeholder="Confirmar senha" required>
        <input type="hidden" name="tela" id="" value="usuarioRegistro" required>
        <label for="">
            <input type="checkbox" name="diretriz">
            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Direito e diretizes</a>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Conteudo
                        </div>
                    </div>
                </div>
            </div>

        </label>
        <label for="">
            <input type="checkbox" name="empresarial"> Marque se for conta de uma loja
        </label>

        <button type="submit">Confirmar registro</button>
    </form>
</main>