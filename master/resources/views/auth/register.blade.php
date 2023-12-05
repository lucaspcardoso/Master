<!DOCTYPE html>
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
            <div class="containerLogo">
                <a href="/">
                    <img src="{{ asset('imgs/M.png') }}" alt="">
                </a>
                <h1>Seja bem-vindo!</h1>
            </div>

            <div class="Cetapa">
                <p id="textStage"></p>
            </div>


            <form action="/registerUser" method="POST" class="containerInputs">
                @csrf
                <div class="block1">
                    <div class="inputCont">
                        <div class="label">
                            <label for="name">Nome Completo</label>
                        </div>
                        <input type="text" id="name" name="name" required>
                    </div>

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

                    <div class="inputCont">
                        <div class="label">
                            <label for="passwordC">Confirmar Senha</label>
                        </div>
                        <input type="password" id="passwordC" name="passwordC" required>
                    </div>

                    <div class="containerBtns">
                        <button class="btnProximaEtapa" id="btnAvancar" type="button">Próxima Etapa</button>
                    </div>

                </div>

                <div class="block2 none">
                    <div class="inputCont">
                        <div class="label">
                            <label for="cpf">CPF</label>
                        </div>
                        <input type="text" id="cpf" name="cpf" required>
                    </div>

                    <div class="inputCont">
                        <div class="label">
                            <label for="cep">CEP</label>
                        </div>
                        <input type="text" id="cep" name="cep" required>
                    </div>

                    <div class="inputCont">
                        <div class="label">
                            <label for="rua">Rua</label>
                        </div>
                        <input type="text" id="rua" name="rua" required>
                    </div>

                    <div class="inputCont">
                        <div class="label">
                            <label for="bairro">Bairro</label>
                        </div>
                        <input type="text" id="bairro" name="bairro" required>
                    </div>

                    <div class="inputCont">
                        <div class="label">
                            <label for="numero">Número da casa</label>
                        </div>
                        <input type="text" id="numero" name="numero" required>
                    </div>

                    <div class="check">
                        <input type="checkbox" name="term" id="term" required>
                        <label for="term" class="checkLabel">Eu concordo com os <a href="#">termos de
                                serviço</a></label>
                    </div>

                    <div class="containerBtns">
                        <button class="btnProximaEtapa" id="register" type="submit">Cadastrar</button>
                    </div>
                </div>

                <div class="stage">
                    <div class="accont">
                        <span>Já tem uma conta? <a href="/login" class="entrar">Entrar</a></span>
                    </div>

                    <div class="containerStage">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                    </div>
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

            </form>
        </div>
    </div>

</body>

<script src="{{ asset('js/register.js') }}"></script>
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>

</html>
