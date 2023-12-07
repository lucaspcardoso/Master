<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cupon;
use Illuminate\Http\Request;

class CuponController extends Controller {
    public function verificarCupom(Request $request) {
        $cupom = $request->cupom;
        $find = Cupon::where('codCupon', $cupom)->first();
        if(empty($find)) {
            return redirect()->back()->withErrors(['notFound' => 'Cupom não encontrado!']);
        } else {
            $pedido = Cart::where('user_id', auth()->user()->id)->get();
            foreach($pedido as $p) {
                $p->cupom_id = $find->id;
                if(is_null($p->cupom->cupon_id)) {
                    $p->save();
                } else {
                    $p->update();
                }
            }

            return redirect()->back()->withErrors(['notFound' => 'Cupom Encontrado!']);
        }

    }
}
