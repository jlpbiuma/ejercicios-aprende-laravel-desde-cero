<?php

use App\Http\Controllers\ControllerEjercicio3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ejercicio 1

Route::get('/ejercicio1', function () {
    return "GET OK";
});

Route::post('/ejercicio1', function () {
    return "POST OK";
});

Route::put('/ejercicio1', function () {
    return "PUT OK";
});

Route::delete('/ejercicio1', function () {
    return "DELETE OK";
});

Route::patch('/ejercicio1', function () {
    return "PATCH OK";
});

Route::post('/ejercicio2/a', function (Request $request) {
    // Como es un post, es necesario recibir la request, y de ahí se selecciona lo necesario, en este caso se retorna todo
    $product = $request->all();
    return response()->json($product);
});

Route::post('/ejercicio2/b', function (Request $request) {
    // Como es un post, es necesario recibir la request, y de ahí se selecciona lo necesario, en este caso se retorna todo
    $product = $request->all();
    return $product['price'] > 0 ? response()->json($product) : response()->json(["message" => "Price can't be less than 0"], 422);
});

Route::post('/ejercicio2/c', function (Request $request) {
    $product = $request->all();
    switch($request->query('discount')) {
        default:
            $discount = 0;
            break;
        case 'SAVE5':
            $discount = 0.05;
            break;
        case 'SAVE10':
            $discount = 0.1;
            break;
        case 'SAVE15':
            $discount = 0.15;
            break;
    }
    $price = $product['price'] - ($product['price'] * $discount);
    $product['price'] = $price;
    $product['discount'] = $discount * 100;
    return Response::json($product);
});

Route::get('/ejercicio3', [ControllerEjercicio3::class, 'create']);
Route::post('/ejercicio3', [ControllerEjercicio3::class, 'store']);