<main>
    <div class="produto">
        <div>
            <!-- Button trigger modal -->
            <button type="button" class="image-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="https://via.placeholder.com/400x400" alt="">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-bodymodal-dinamic">
                            <div id="carouselImagemProduto" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <?php if ($i == 0) : ?>
                                            <button type="button" data-bs-target="#carouselImagemProduto" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <?php else : ?>
                                            <button type="button" data-bs-target="#carouselImagemProduto" data-bs-slide-to="<?= $i ?>" aria-current="true" aria-label="Slide <?= $i + 1 ?>"></button>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <div class="carousel-inner">
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <?php if ($i == 0) : ?>
                                            <div class="carousel-item active">
                                                <a href=""><img src="https://via.placeholder.com/80x80" class="d-block w-100" alt="..."></a>
                                            </div>
                                        <?php else : ?>
                                            <div class="carousel-item">
                                                <a href=""><img src="https://via.placeholder.com/80x80" class="d-block w-100" alt="..."></a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagemProduto" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselImagemProduto" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <span class="titulo-produto"><?=$produto['nome']?></span>
            <pre class="descricao-produto"><?=$produto['descricao']?></pre>
            <span class="preco-produto">R$ <?=$produto['preco']?></span>
        </section>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31599.925684281923!2d-35.281838!3d-8.102427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7abab4837583239%3A0xd3ed3d0422e78484!2sR.%20Nestor%20Henrique%20da%20Rocha%2C%2062%20-%20Caj%C3%A1%2C%20Vit%C3%B3ria%20de%20Santo%20Ant%C3%A3o%20-%20PE%2C%2055610-310!5e0!3m2!1spt-BR!2sbr!4v1654024264945!5m2!1spt-BR!2sbr" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="botoes">
        <button type="button" data-bs-toggle="collapse" data-bs-target="#detalhes" aria-expanded="false" aria-controls="collapseExample">
            Detalhes <i class="fa fa-unsorted"></i>
        </button>
        <div class="collapse" id="detalhes">
            <div class="card card-body">
                <pre>
<?=$produto['detalhes']?>
                </pre>
            </div>
        </div>
    </div>
    <div class="comentariosEstrelas">
        <div class="comentarios-container">
            <!-- comentarios recenter -->
            <section>
                <img src="http://via.placeholder.com/50x50" alt="">
                <span>
                    <span class="d-block">Nome Usuario</span>
                    <span class="d-block comentario">Usuario comentario</span>
                </span>
            </section>
            <section>
                <img src="http://via.placeholder.com/50x50" alt="">
                <span>
                    <span class="d-block">Nome Usuario</span>
                    <span class="d-block comentario">Usuario comentario</span>
                </span>
            </section>
            <button>View More</button>
        </div>
        <div>
            <section>
                <?php for ($i = 0; $i < 5; $i++) : ?> <i class="fa fa-star"></i> <?php endfor; ?>(X)<br>
                    <?php for ($i = 0; $i < 4; $i++) : ?> <i class="fa fa-star"></i> <?php endfor; ?>(X)<br>
                        <?php for ($i = 0; $i < 3; $i++) : ?> <i class="fa fa-star"></i> <?php endfor; ?>(X)<br>
                            <?php for ($i = 0; $i < 2; $i++) : ?> <i class="fa fa-star"></i> <?php endfor; ?>(X)<br>
                                <i class="fa fa-star"></i>(X)
            </section>
        </div>
    </div>
</main>