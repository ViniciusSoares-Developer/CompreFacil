<main>
    <div class="drop-container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-filter"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <input type="checkbox" name="barato" id="barato"> 
                    <label for="barato">barato</label>
                </li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-center w-100 flex-wrap">
        <?php for ($i = 0; $i < 6; $i++) : ?>
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
        <?php endfor; ?>
    </div>
    <div class="mais-container d-flex justify-content-center w-100">
        <button>Ver mais</button>
    </div>
</main>