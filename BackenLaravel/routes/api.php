<?php
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//api rest de persona ruta persona todo , persona/id por id
Route::get('persona', [PersonaController::class, 'getPersona'])->name('getPersona');
Route::get('persona/{id}', [PersonaController::class, 'getPersonabyid'])->name('getPersonabyid');
//api rest de prodcuts ruta prodcuts todo , prodcuts/id por id
Route::get('products', [ProductoController::class, 'getProducts'])->name('getProducts');
Route::get('products/{id}', [ProductoController::class, 'getProductsbyid'])->name('getProductsbyid');


