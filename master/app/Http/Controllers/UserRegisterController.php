<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function store(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cep = $request->cep;
        $user->rua = $request->rua;
        $user->bairro = $request->bairro;
        $user->numero = $request->numero;
        $user->cpf = $request->cpf;

        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email já está em uso']);
        }

        $user->save();
        Auth::login($user);
        return redirect("/cardapio");
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->password;

        $user = User::where('email', $email)->get();
        if ($user->first()) {
            if (Hash::check($senha, $user->first()->password)) {
                Auth::login($user->first());
                return redirect('/cardapio');
            } else {
                return redirect()->back()->withErrors(['email' => 'Email ou Senha invalidos']);
            }
        } else {
            return redirect()->back()->withErrors(['email' => 'Email Invalido']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
