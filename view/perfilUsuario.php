<main>
    <div class="perfilUsuario">
        <div>
            <img src="http://via.placeholder.com/50x50" class="foto-fundo" alt="">
            <img src="http://via.placeholder.com/50x50" class="foto" alt="">
        </div>
        <div>
            <span class="d-block text-center nome"><?php echo 'nome' ?></span>
            <span class="d-block">Fone:</span>
            <span>Endereço: </span>
        </div>
        <div class="d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9911714954214!2d-35.283999485888!3d-8.102380033289455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7abab4797c822a7%3A0xa8b6ffd684e5c9df!2sR.%20Nestor%20Henrique%20da%20Rocha%20-%20%C3%81gua%20Branca%2C%20Vit%C3%B3ria%20de%20Santo%20Ant%C3%A3o%20-%20PE%2C%2055610-310!5e0!3m2!1spt-BR!2sbr!4v1654400583336!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="d-flex">
            <?php foreach ($listaProdutos as $produto) : ?>
                <a href="?pagina=4&idp=<?=$produto['id']?>" class="produto-container">
                    <!-- detalhes do produto -->
                    <img src="https://via.placeholder.com/80x80" alt="">
                    <span><?= $produto['nome'] ?></span>
                    <!-- estrelas -->
                    <div class="avaliacao">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-empty"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</main>