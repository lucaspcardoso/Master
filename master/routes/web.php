<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CuponController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CuponController::class)->group(function () {
    Route::post('/verificarCupom', 'verificarCupom');
});

Route::controller(UserRegisterController::class)->group(function () {
    Route::post("/registerUser", 'store');
    Route::get('/logout', 'logout');
    Route::post('/loginUser', 'login');
});

Route::controller(viewController::class)->group(function () {
    Route::get("/cardapio", 'cardapio');
    Route::get("/contact", "contact");
    Route::get('/carrinho', 'carrinho');
    Route::get('/cupom/pedido', 'cupom');
    Route::get('/formaPagamento', 'pagamento');
    Route::get('/addCartao', 'cartao');
});

Route::post('/add-to-cart/{id}', [CarrinhoController::class, 'add']);
Route::delete('/remove-to-cart/{id}', [CarrinhoController::class, 'remove']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
