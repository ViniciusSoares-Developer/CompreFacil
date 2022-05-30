<main>
    <div id="carouselPrincipal" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <?php for($i = 0; $i<5; $i++): ?>
                <?php if($i == 0):?>
                    <button type="button" data-bs-target="#carouselPrincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                 <?php else:?>
                    <button type="button" data-bs-target="#carouselPrincipal" data-bs-slide-to="<?=$i?>" aria-current="true" aria-label="Slide <?=$i+1?>"></button>
                <?php endif;?>
            <?php endfor; ?>
        </div>
        <div class="carousel-inner">
            <?php for($i = 0; $i<5; $i++):?>
                <?php if($i == 0):?>
                    <div class="carousel-item active">
                    <a href=""><img src="https://via.placeholder.com/80x80" class="d-block w-100" alt="..."></a>
                </div>
                <?php else:?>
                <div class="carousel-item">
                    <a href=""><img src="https://via.placeholder.com/80x80" class="d-block w-100" alt="..."></a>
                </div>
                <?php endif;?>
            <?php endfor?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="carouselProdutos" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="d-flex justify-content-center w-100">
                    <?php for($i=0;$i<5;$i++):?>
                    <section class="produto-container">
                        <!-- detalhes do produto -->
                        <img src="https://via.placeholder.com/80x80" alt="">
                        <span>Nome Produto</span>
                        <!-- estrelas -->
                        <div class="avaliacao">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-empty"></i>
                            <i class="fa fa-star-o"></i>
                            <span>(5)</span>
                        </div>
                        <!-- Botoes de compra -->
                        <button>Adicionar carrinho</button>
                        <button>Comprar agora</button>
                    </section>
                    <?php endfor;?>
                </section>
            </div>
            <div class="carousel-item">
                <section class="d-flex justify-content-center w-100">
                    <?php for($i=0;$i<5;$i++):?>
                    <section class="produto-container">
                        <!-- detalhes do produto -->
                        <img src="https://via.placeholder.com/80x80" alt="">
                        <span>Nome Produto</span>
                        <!-- estrelas -->
                        <div class="avaliacao">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-empty"></i>
                            <i class="fa fa-star-o"></i>
                            <span>(5)</span>
                        </div>
                        <!-- Botoes de compra -->
                        <button>Adicionar carrinho</button>
                        <button>Comprar agora</button>
                    </section>
                    <?php endfor;?>
                </section>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProdutos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProdutos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>