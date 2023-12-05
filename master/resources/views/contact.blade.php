<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <title>Contato</title>
</head>

@livewire('navigation-menu')

<body>
    <div class="containerTitle">
        <h3>Contact Us</h3>
    </div>

    <main>
        <div class="sectionCards">
            <div class="containerCard">
                <img src="{{ asset('imgs/Food bank.png') }}" alt="">
                <h3>Instagram</h3>
                <p>
                    Siga nosso Instagram para uma dose diária de tentação gourmet. Descubra os bastidores da nossa
                    lanchonete, mergulhe em fotos irresistíveis dos nossos pratos gourmet e esteja sempre atualizado
                    sobre
                    as promoções e novidades que preparamos especialmente para você. Siga-nos e deixe sua experiência
                    gourmet começar com um clique.
                </p>

                <div class="containerBtn">
                    <a href="https://www.instagram.com/l11ucas/" target="_blank" class="btnCliqueAqui">Clique Aqui</a>
                </div>

            </div>

            <div class="containerCard cImg">
                <img src="{{ asset('imgs/Mobile user-rafiki 1.png') }}" alt="" class="img">
            </div>

            <div class="containerCard">
                <img src="{{ asset('imgs/Message.png') }}" alt="">
                <h3>Whatsapp</h3>
                <p>
                    Estamos aqui para tornar sua experiência ainda mais personalizada! Se surgir alguma dúvida ou se
                    você
                    deseja fazer um pedido personalizado, não hesite em nos contatar pelo WhatsApp. Nossa equipe gourmet
                    está pronta para atender a todos os seus desejos culinários. Sinta-se à vontade para enviar uma
                    mensagem
                    e desfrute de um atendimento exclusivo, feito sob medida para você. Estamos ansiosos para tornar
                    cada
                    pedido uma experiência gastronômica única!
                </p>

                <div class="containerBtn">
                    <a href="https://www.instagram.com/l11ucas/" class="btnCliqueAqui">Clique Aqui</a>
                </div>
            </div>
        </div>
    </main>
</body>
