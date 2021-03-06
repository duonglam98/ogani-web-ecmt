<?php

use App\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Order;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth', 'checkAdmin'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products', [ProductController::class, 'store']);
});

Route::resource('products', ProductController::class)->except([
    'create', 'store'
]);

Route::middleware(['auth'])->group(function () {
    Route::post('/orders', [OrderController::class, 'store']);
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::delete('/orders/{product_order_id}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::put('/orders/{product_order_id}', [OrderController::class, 'update'])->name('orders.update');

});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('duongthixinh48@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});