<?php

use App\Http\Controllers\CurrenciesController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Currency
Route::get('/currency/list', [CurrenciesController::class,'selectCurrency'])->name('selectCurrency');
Route::get('/currency/byid', [CurrenciesController::class,'getCurrencyById'])->name('getCurrencyById');
Route::post('/currency/add', [CurrenciesController::class,'addNewCurrency'])->name('addNewCurrency');
Route::put('/currency/update', [CurrenciesController::class,'updateCurrency'])->name('updateCurrency');
Route::delete('/currency/delete', [CurrenciesController::class,'deleteCurrency'])->name('deleteCurrency');
//market
Route::get('/market/list', [CurrenciesController::class,'selectMarket'])->name('selectMarket');
Route::get('/market/byid', [CurrenciesController::class,'getMarketById'])->name('getMarketById');
Route::post('/market/add', [CurrenciesController::class,'addNewMarket'])->name('addNewMarket');
Route::delete('/market/delete', [CurrenciesController::class,'deletemarket'])->name('deletemarket');
//storages
Route::get('/currency/list', [CurrenciesController::class,'selectStorage'])->name('selectStorage');
Route::get('/currency/byid', [CurrenciesController::class,'getStorageById'])->name('getStorageById');
Route::post('/currency/add', [CurrenciesController::class,'addNewStorage'])->name('addNewStorage');
Route::put('/currency/update', [CurrenciesController::class,'updateStorage'])->name('updateStorage');
Route::delete('/currency/delete', [CurrenciesController::class,'deleteStorage'])->name('deleteStorage');
//wallets
Route::get('/currency/list', [CurrenciesController::class,'selectWallet'])->name('selectWallet');
Route::get('/currency/byid', [CurrenciesController::class,'getWalletById'])->name('getWalletById');
Route::post('/currency/add', [CurrenciesController::class,'addNewWallet'])->name('addNewWallet');
Route::put('/currency/update', [CurrenciesController::class,'updateWallet'])->name('updateWallet');
Route::delete('/currency/delete', [CurrenciesController::class,'deleteWallet'])->name('deleteWallet');
//histories
Route::get('/currency/list', [CurrenciesController::class,'selectHistory'])->name('selectHistory');
Route::get('/currency/byid', [CurrenciesController::class,'getHistoryById'])->name('getHistoryById');
Route::post('/currency/add', [CurrenciesController::class,'addNewHistory'])->name('addNewHistory');
Route::delete('/currency/delete', [CurrenciesController::class,'deleteHistory'])->name('deleteHistory');