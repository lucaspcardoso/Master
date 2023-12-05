<?php

namespace App\Http\Controllers;

use App\Events\CartItemAdded;
use App\Models\Cart;
use App\Models\Lunch;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CarrinhoController extends Controller
{
    public function add(Request $request, string $id)
    {
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $id;
        $cart->save();

        return redirect()->back()->withErrors(['add' => 'Adicionado com sucesso']);
    }

    public function remove(string $id){
        $cart = Cart::find($id)->first();
        $cart->delete();
        return redirect()->back()->withErrors(['add' => 'Apagado com sucesso']);
    }
}
