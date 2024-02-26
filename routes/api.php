<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Models\Customer;
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


Route::get('/get_all_invoice', [InvoiceController::class, 'get_all_invoice']);
Route::get('/search_invoice', [InvoiceController::class, 'search_invoice']);
Route::get('/create_invoice', [InvoiceController::class, 'create_invoice']);

Route::get('/customers', [CustomerController::class, 'all_customer']);
Route::get('/products', [ProductController::class, 'all_products']);

Route::post('/add_invoice', [InvoiceController::class, 'add_invoice']);

Route::get('/show_invoice/{id}', [InvoiceController::class, 'show_invoice']);

Route::get('/edit_invoice/{id}', [InvoiceController::class, 'edit_invoice']);
Route::get('/delete_invoice_item/{id}', [InvoiceController::class, 'delete_invoice_item']);
Route::post('/update_invoice/{id}', [InvoiceController::class, 'update_invoice']);

Route::get('/delete_invoice/{id}', [InvoiceController::class, 'delete_invoice']);

Route::post('/add_customer', [CustomerController::class, 'add_customer']);
Route::get('/get_all_customer', [CustomerController::class, 'get_all_customer']);
Route::get('/edt_customer/{id}', [CustomerController::class, 'edt_customer']);
Route::post('/update_customer/{id}', [CustomerController::class, 'update_customer']);


Route::post('/add_product', [ProductController::class, 'add_product']);
Route::get('/get_all_product', [ProductController::class, 'get_all_product']);


