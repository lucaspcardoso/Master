<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/home.css" />
    <title>Master | Home</title>
</head>

<body>
    @livewire('navigation-menu')
    <main class="containerMain">
        <div class="containerIntro">
            <img src="imgs/artCircle.png" alt="" class="circleArt2" />
            <img src="imgs/artCircle.png" alt="" class="circleArt1" />

            <div class="containerText">
                <h3>Toc! Toc!</h3>
                <p>
                    Deixe o sabor bater à sua porta! Saboreie a conveniência com nosso
                    delivery, onde cada pedido é uma experiência irresistível entregue
                    diretamente no conforto do seu lar.
                </p>

                <div class="containerButton">
                    <a href="/cardapio" class="cardapio">Cardápio</a>
                    <a href="/contact" target="_blank" class="contact">Entrar em contato</a>
                </div>
            </div>

            <div class="containerImgIntro">
                <img src="imgs/Delivery-cuate 1.png" alt="" />
            </div>
        </div>

        <div class="containerCarrossel">
            <h3>Destaques da Semana</h3>

            <section>
                <div class="carousel-container">
                    <button class="arrow-left">
                        <img src="imgs/left-arrow.png" alt="">
                    </button>
                    <div class="carousel">
                        <div class="cards-container">
                            <div class="card">
                                <img src="imgs/composicao-plana-de-refeicao-de-alta-proteina 1.png" alt="">
                                <p>Prato Feito - Filé de Frango</p>
                                <a href="#" class="btnAddCarrinho"> <img src="imgs/Shopping Cart.png" alt=""
                                        class="carrinho"> Adicionar ao Carrinho</a>
                            </div>
                            <div class="card">
                                <img src="imgs/hamburguer-de-vista-frontal-em-um-carrinho 1.png" alt="">
                                <p>X Tudo</p>
                                <a href="#" class="btnAddCarrinho"> <img src="imgs/Shopping Cart.png" alt=""
                                        class="carrinho"> Adicionar ao Carrinho</a>
                            </div>
                            <div class="card">
                                <img src="imgs/vista-superior-deliciosas-batatas-fritas-e-molho 1.png">
                                <p>Porção de batata frita M</p>
                                <a href="#" class="btnAddCarrinho"> <img src="imgs/Shopping Cart.png" alt=""
                                        class="carrinho"> Adicionar ao Carrinho</a>
                            </div>
                            <div class="card">
                                <img src="imgs/composicao-plana-de-refeicao-de-alta-proteina 1.png" alt="">
                                <p>Prato Feito - Filé de Frango</p>
                                <a href="#" class="btnAddCarrinho"> <img src="imgs/Shopping Cart.png" alt=""
                                        class="carrinho"> Adicionar ao Carrinho</a>
                            </div>
                            <div class="card">
                                <img src="imgs/hamburguer-de-vista-frontal-em-um-carrinho 1.png" alt="">
                                <p>X Tudo</p>
                                <a href="#" class="btnAddCarrinho"> <img src="imgs/Shopping Cart.png" alt=""
                                        class="carrinho"> Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    <button class="arrow-right">
                        <img src="imgs/arrow-point-to-right.png" alt=""></i>
                    </button>
                </div>
            </section>
        </div>
    </main>
</body>

<script src="js/home.js"></script>

</html>