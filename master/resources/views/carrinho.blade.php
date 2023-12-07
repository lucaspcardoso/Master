<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/carrinho.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <title>Carrinho</title>
</head>

@livewire('navigation-menu')

<body>
    <main>
        <div class="containerMainCarrinho">
            <span>Seu pedido em <strong> Master - Amparo(SP)</strong><a href="/cardapio">Ver Cardápio</a></span>
        </div>
        @php
            $total = 0;
        @endphp
        <div class="listCarrinho">
            @forelse ($cart as $c)
                <div class="item">
                    <img src="{{ $c->product->img }}" alt="" class="imagemItem">
                    <div class="containerTextItem">
                        <h3 class="name">{{ $c->product->name }}</h3>
                        <p>{{ $c->product->description }}</p>
                        <p class="price">R$ {{ $c->product->price }}</p>
                    </div>

                    <button type="button" class="btnOpenPopup" data-item-id="{{ $c->id }}"><img
                            src="{{ asset('imgs/Remove.png') }}" alt=""></button>
                </div>
                @php
                    $precoUni = $c->product->price + $total;
                    $total = $precoUni;
                    $desc = $c->cupom->desconto;
                @endphp
            @empty
                <h1 class="notFound">Não há nenhum item no seu carrinho.</h1>
            @endforelse


            @if (isset($cart[0]))
                <div class="containerCupon">
                    <div>
                        <img src="{{ asset('imgs/desconto.png') }}" alt="" srcset="">
                        <span>Cupons</span>
                    </div>

                    <a href="/cupom/pedido"><img src="{{ asset('imgs/next.png') }}" alt=""></a>
                </div>

                <div class="notaFiscal">
                    <div>
                        <span>Subtotal</span>
                        <span>R${{ number_format($total, 2, ',', '.') }}</span>
                    </div>
                    <div class="noneMargin">
                        <span>Taxa de Entrega</span>
                        <span>R$5,99</span>
                    </div>

                    <hr>

                    <div>
                        <span class="total">Total</span>
                        <span>R${{ number_format(($total * (100 - $desc)) / 100 + 5.99, 2, ',', '.') }}</span>
                    </div>
                </div>

                <div class="containerBtn">
                    <a href="/formaPagamento" class="btnPagamento">
                        Escolher forma de pagamento
                    </a>
                </div>
            @endif
        </div>


    </main>

    <div id="overlay">
    </div>

    <div id="popup">
        <form action="" method="POST" id="formPopUp" class="formPopUp">
            @csrf
            @method('delete')
            <img src="{{ asset('imgs/Remove shopping cart.png') }}" alt="">
            <h2>Deseja mesmo excluir esse item do seu carrinho?</h2>
            <div class="containerButtonPopUp">
                <button type="submit" id="continue" class="continue">Continuar</button>
                <button type="button" id="cancel" class="cancel">Cancelar</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/carrinho.js') }}"></script>
</body>


</html>
