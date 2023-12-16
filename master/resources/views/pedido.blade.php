<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @livewire('navigation-menu')

    @foreach ($pedido as $p)
        <p>{{ $p->cart->product->img }}</p>
    @endforeach
</body>

</html>
