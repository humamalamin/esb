<?php

use App\Http\Controllers\API\Invoice\Index;
use App\Http\Controllers\API\InvoiceController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('invoice/{invoiceId}', [InvoiceController::class, 'show'])->name('invoice.show');
