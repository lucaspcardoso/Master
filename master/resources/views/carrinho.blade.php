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

        <div class="listCarrinho">

        </div>
    </main>
</body>
