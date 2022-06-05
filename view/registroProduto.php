<main>
    <form action="./controller/controllerProduto.php" method="post">
        <input type="file" name="image" accept="image/*" multiple>
        <picture>
            <img src="" alt="">
        </picture>
        <input type="text" name="nome" id="" placeholder="Nome do produto" autocomplete="none" required>
        <input type="number" name="preco" placeholder="Preço" id="" min="0" step="0.01" required>
        <textarea name="descricao" placeholder="Descrição" id="" cols="30" rows="5"></textarea>
        <textarea name="detalhe" placeholder="Detalhes" id="" cols="30" rows="10"></textarea>

        <input type="hidden" name="tela" id="" value="produtoRegistro" required>
        <input type="hidden" name="id" id="" value="<?=$usuarioId?>" required>

        <button type="submit">Registrar Produto</button>
    </form>
</main>