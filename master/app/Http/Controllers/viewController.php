<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Lunch;
use Illuminate\Http\Request;

class viewController extends Controller {
    public function cardapio() {
        $lunch = Lunch::all();
        return view('cardapio', ['lunch' => $lunch]);
    }

    public function contact() {
        return view('contact');
    }

    public function carrinho() {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('carrinho', ['cart' => $cart]);
    }

    public function cupom() {
        return view('cupom');
    }

    public function pagamento() {
        return view('pagamento');
    }
}
