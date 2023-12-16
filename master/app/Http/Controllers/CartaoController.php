<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CartaoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validade;
        $cartao = new Cartao();
        $cartao->type = $request->type;
        $cartao->titular = $request->name;
        $cartao->nCartao = $request->nCartao;
        $cartao->dataVencimento = '01/' . $data;
        $cartao->codSeguraca = Hash::make($request->cvv);
        $cartao->bandeira = $request->bandeira;
        $cartao->apelido = $request->apelido;
        $cartao->cpf = $request->cpf;
        $cartao->user_id = auth()->user()->id;
        $cartao->save();
        return redirect()->back()->withErrors(['add' => 'Seu cartão foi adicionado com sucesso!']);
    }
}
