<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/registerLogin.css') }}">
    <title>Cadastro no Master</title>
</head>

<body>
    <div class="containerAll">
        <div class="containerLeft">
            <img src="{{ asset('imgs/Login-rafiki 1.png') }}" alt="" class="image">
        </div>

        <div class="containerRight">
            <div class="containerLogo loginLogo">
                <a href="/">
                    <img src="{{ asset('imgs/M.png') }}" alt="">
                </a>
                <h1>Seja bem-vindo de volta!</h1>
            </div>


            <form action="/loginUser" method="POST" class="containerInputs">
                @csrf
                <div class="block1 login">

                    <div class="inputCont">
                        <div class="label">
                            <label for="email">Email</label>
                        </div>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="inputCont">
                        <div class="label">
                            <label for="password">Senha</label>
                        </div>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="cEsqueciSenha">
                        {{-- fazer um popUp --}}
                        @if (Route::has('password.request'))
                            <a class="esqueciSenha" href="{{ route('password.request') }}">
                                {{ __('Esqueci minha senha') }}
                            </a>
                        @endif
                    </div>

                    <div class="containerBtns">
                        <button class="btnProximaEtapa" id="register" type="submit">Entrar</button>
                    </div>

                    @error('email')
                        <div class="containerError">
                            <div>
                                <h1>Erro!</h1>
                                <img src="{{ asset('imgs/svg/x (1).svg') }}" alt="" id="btnClose">
                            </div>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror

                </div>

                <div class="stage">
                    <div class="accont">
                        <span>Não tenho conta? <a href="/register" class="entrar">Cadastrar</a></span>
                    </div>

                </div>

            </form>
        </div>
    </div>

</body>

<script src="{{ asset('js/login.js') }}"></script>
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>


</html>
