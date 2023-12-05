<?php

namespace App\Http\Controllers;

use App\Models\Lunch;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function cardapio()
    {
        $lunch = Lunch::all();
        return view('cardapio', ['lunch' => $lunch]);
    }

    public function contact()
    {
        return view('contact');
    }
}
