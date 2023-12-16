<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function makePedido()
    {
        $all = Pedido::all();
        return view('pedido', ["pedido" => $all]);
    }

    public function log()
    {

    }
}
