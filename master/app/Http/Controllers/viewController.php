<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Lunch;
use Illuminate\Http\Request;

class viewController extends Controller {
    public function cardapio() {
        $lunch = Lunch::all();
        $count = Cart::where('user_id', auth()->user()->id)->count();
        return view('cardapio', ['lunch' => $lunch, 'count' => $count]);
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
}
