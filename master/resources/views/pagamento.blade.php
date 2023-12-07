<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pagamento.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <title>Forma de Pagamento</title>
</head>

<body>
    @livewire('navigation-menu')
    <main>
        <h2>Finalize o seu Pedido</h2>

        <div class="containerOption">
            <span class="active">Entrega</span>
            <span>Retirada</span>
        </div>

        <div class="containerEndTroc">
            <div class="containerEndereco">
                <img src="{{ asset('imgs/local.png') }}" alt="">
                <div>
                    <p>{{ auth()->user()->rua }}, {{ auth()->user()->numero }}</p>
                    <p>Amparo - SP</p>
                </div>
            </div>
            <div class="containerTrocar">
                <a href="#">Trocar</a>
            </div>
        </div>

        <div class="containerOption">
            <span class="active">Pague pelo site</span>
            <span>Pague na empresa</span>
        </div>

        <form action="">
            <div class="containerMetPag">
                <div class="containerMetodo">
                    <div class="containerMetImg">
                        <img src="{{ asset('imgs/pix.png') }}" alt="" class="pix">
                        <div>
                            <p>Pague com Pix</p>
                            <p class="desc">Use o QR Code ou copie e cole o código</p>
                        </div>
                    </div>

                    <div class="containerInput">
                        <input type="radio" name="metodo" id="metodo" value="pix">
                    </div>
                </div>

                <div class="containerMetodo">
                    <div class="containerMetImg">
                        <img src="{{ asset('imgs/credito.png') }}" alt="">
                        <div>
                            <p>Pague com Cartão de Crédito</p>
                        </div>
                    </div>

                    <div class="containerInput">
                        <input type="radio" name="metodo" id="metodo" value="credito">
                    </div>
                </div>

                <div class="containerMetodo">
                    <div class="containerMetImg">
                        <img src="{{ asset('imgs/debito.png') }}" alt="">
                        <div>
                            <p>Pague com Cartão de Débito</p>
                        </div>
                    </div>

                    <div class="containerInput">
                        <input type="radio" name="metodo" id="metodo" value="pix">
                    </div>
                </div>
            </div>

        </form>

        <div class="containerAddCartao">
            <div class="containerAddText">
                <h2>Adicione um cartão no Master</h2>
                <p>Adicione um novo cartão ao nosso site e facilite seus pedidos, proporcionando uma experiência de
                    lanchonete mais rápida e conveniente.</p>

                <a href="/addCartao">Adicionar novo cartão</a>
            </div>

            <div>
                <img src="{{ asset('imgs/cartao.png') }}" alt="" srcset="">
            </div>
        </div>

        <div class="containerBtnBack">
            <button type="button">Fazer Pedido</button>
        </div>
    </main>
</body>

</html>
