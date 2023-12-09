<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/addCartao.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <title>Adicionar Cartão</title>
</head>

@livewire('navigation-menu')

<body>
    <main>
        <div class="containerAll">
            <div class="block1">
                <h2>Escolha um meio de pagamento</h1>

                    <div class="containerMeioPag">
                        <div>
                            <img src="{{ asset('imgs/debitoAdd.png') }}" alt="">
                            <span>Débito</span>
                        </div>
                        <img src="{{ asset('imgs/next.png ') }}" alt="" id="db">
                    </div>

                    <div class="containerMeioPag">
                        <div>
                            <img src="{{ asset('imgs/creditoAdd.png') }}" alt="">
                            <span>Crédito</span>
                        </div>
                        <img src="{{ asset('imgs/next.png ') }}" alt="" id="cr">
                    </div>

                    <div class="containerMeioPag">
                        <div>
                            <img src="{{ asset('imgs/valeRefeicao.png') }}" alt="">
                            <span>Vale-Refeição</span>
                        </div>
                        <img src="{{ asset('imgs/next.png ') }}" alt="" id="vr">
                    </div>

                    <div class="containerMeioPag">
                        <div>
                            <img src="{{ asset('imgs/valeAlimentacao.png') }}" alt="">
                            <span>Vale-Alimentação</span>
                        </div>
                        <img src="{{ asset('imgs/next.png ') }}" alt="" id="va">
                    </div>
            </div>

            <div class="block2 none">
                <div class="typePayment">
                    <img src="{{ asset('imgs/next.png ') }}" alt="" class="back" id="back">
                    <span id="text"></span>
                </div>

                <div class="containerDividido">
                    <form action="" method="POST" class="containerForm">
                        <input type="text" placeholder="Número do cartão" required id="nCartao" name="nCartao">
                        <input type="text" placeholder="Nome impresso no cartão" required id="name"
                            name="name">

                        <div>
                            <input type="text" placeholder="Validade" id="validade" name="validade">
                            <input type="number" placeholder="CVV" id="cvv" name="cvv">
                        </div>

                        <input type="text" placeholder="Apelido do cartão" id="apelido" name="apelido">
                        <input type="text" placeholder="CPF/CNPJ do titular" id="cpf" name="cpf">

                        <button type="submit" class="btnAdd">Adicionar</button>
                    </form>

                    <div class="containerCard">
                        <div class="card">
                            <div class="cardTitle">
                                <img src="{{ asset('imgs/MCard.png') }}" alt="">
                                <span id="titleCard"></span>
                            </div>

                            <div class="cardNumbers">
                                <span id="outNcartao">0000 0000 0000 0000</span>
                            </div>

                            <div class="cardNameValidade">
                                <span class="name" id="outName">Nome impresso no cartão</span>
                                <span id="outValidade">MM/AA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
<script src="{{ asset('js/addCartao.js') }}"></script>


</html>
