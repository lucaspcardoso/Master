<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cupom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <title>Cupons</title>
</head>

<body>
    @livewire('navigation-menu')

    <main>
        <h2>Cupons</h2>

        @error('notFound')
            <p>{{ $message }}</p>
        @enderror

        <div>
            <form action="/verificarCupom" method="POST">
                @csrf
                <div class="containerInputCupom">
                    <input type="text" name="cupom" placeholder="Código do cupom">
                    <button type="submit"><img src="{{ asset('imgs/search.png') }}" alt=""></button>
                </div>

            </form>
        </div>

        <div class="containerNoCupomImg">
            <div class="containerNoCupom">
                <div class="containerImageText">
                    <div>
                        <img src="{{ asset('imgs/desconto.png') }}" alt="">
                    </div>

                    <div class="containerText">
                        <span>Sem Cupom</span>
                        <span>Nenhum cupom aplicado</span>
                    </div>
                </div>

                <div class="containerRadio">
                    <input type="radio" name="cupom" id="cupom">
                </div>
            </div>

            <div class="containerBtnBack">
                <a href="/carrinho">Voltar ao Pedido</a>
            </div>

            <div class="containerImagem">
                <img src="{{ asset('imgs/cupom.png') }}" alt="">
            </div>
        </div>


    </main>
</body>

</html>
