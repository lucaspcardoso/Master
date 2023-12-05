<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/cardapio.css') }}" />
    <title>Cardapio</title>
</head>

<body>
    <header>
        <nav>
            <div class="containerLogo">
                <a href="/">
                    <img src="imgs/M.png" alt="" class="logo" />
                </a>
            </div>

            <div class="containerNavDireita">
                <div class="containerInput">
                    <input type="text" />
                    <a href="#">
                        <img src="imgs/Vector.png" alt="" />
                    </a>
                </div>
                <ul>
                    <div class="containerElementsNav">
                        <li>
                            <a href="/cardapio">
                                <img src="imgs/Cutlery.png" alt="" />
                            </a>
                        </li>

                        <li>
                            <a href="/contact" target="_blank">
                                <img src="imgs/Call.png" alt="" />
                            </a>
                        </li>
                        @auth
                            <li>
                                <a href="#">
                                    <img src="imgs/Shopping Cart.png" alt="" />
                                    <p style="color: white">{{$lunche}}</p>
                                </a>
                            </li>
                        @endauth
                    </div>

                    <div>
                        <li>
                            @guest
                                <div class="containerLoginsHome">
                                    <a href="/login" class="login">Login</a>
                                    <a href="/register" class="cad">Cadastrar</a>
                                </div>

                            @endguest
                            @auth
                                <a href="#">
                                    <img src="imgs/Male User.png" alt="" class="iconUser" />
                                </a>
                            @endauth
                        </li>
                    </div>
                </ul>
            </div>
        </nav>

        <h1 class="textCardapio">Cardápio</h1>
    </header>

    <div class="containerMenuNavegation">
        <div><a href="" class="active">Destaques da semana</a></div>
        <div><a href="">Hambúrgueres artesenais</a></div>
        <div><a href="">Combos promocionais</a></div>
        <div><a href="">Porções</a></div>
        <div><a href="">Bebidas</a></div>
    </div>


    <main>
        @foreach ($lunch as $l)
        <div class="post" id="post{{$l->id}}">
            <div class="containerImgText">
                <img src="{{$l->img}}" alt="" class="imagemPost" />

                <div class="containerTextPost">
                    <h3>{{$l->name}}</h3>
                    <p>
                       {{$l->description}}
                    </p>
                    <p class="price">R${{$l->price}}</p>
                </div>
            </div>

            <div class="containerBtn" id="{{$l->id}}">
                    @if (\App\Models\Cart::where('product_id', $l->id)->exists())
                    <form action="/remove-to-cart/{{$l->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btnRemoveCarrinho" data-post-id="{{$l->id}}" onclick="toggleCartItem(this)">
                        Remover do carrinho
                    </button>
                    @else
                    <form action="/add-to-cart/{{$l->id}}" method="POST">
                        @csrf
                    <button type="submit" class="btnAddCarrinho" data-post-id="{{$l->id}}" onclick="toggleCartItem(this)">
                        Adicionar ao carrinho
                    </button>
                    @endif
                </form>
            </div>
        </div>
        @endforeach

        @error('add')
        <p>{{$message}}</p>
        @enderror
    </main>

    <div id="overlay">
    </div>

    <div id="popup">
        <img src="{{ asset('imgs/Remove shopping cart.png') }}" alt="">
        <h2>Deseja mesmo excluir esse item do seu carrinho?</h2>
        <div class="containerButtonPopUp">
            <button type="button" id="continue" class="continue">Continuar</button>
            <button type="button" id="cancel" class="cancel">Cancelar</button>
        </div>
    </div>



</body>
<script src="js/cardapio.js"></script>

</html>