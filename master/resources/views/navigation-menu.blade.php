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
</header>
