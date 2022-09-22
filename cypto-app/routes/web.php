<?php

use App\Http\Controllers\CurrenciesController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\MarketsController;
use App\Http\Controllers\StoragesController;
use App\Http\Controllers\WalletsController;
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
Route::get('/market/list', [MarketsController::class,'selectMarket'])->name('selectMarket');
Route::get('/market/byid', [MarketsController::class,'getMarketById'])->name('getMarketById');
Route::post('/market/add', [MarketsController::class,'addNewMarket'])->name('addNewMarket');
Route::delete('/market/delete', [MarketsController::class,'deletemarket'])->name('deletemarket');
//storages
Route::get('/storages/list', [StoragesController::class,'selectStorage'])->name('selectStorage');
Route::get('/storages/byid', [StoragesController::class,'getStorageById'])->name('getStorageById');
Route::post('/storages/add', [StoragesController::class,'addNewStorage'])->name('addNewStorage');
Route::put('/storages/update', [StoragesController::class,'updateStorage'])->name('updateStorage');
Route::delete('/storages/delete', [StoragesController::class,'deleteStorage'])->name('deleteStorage');
//wallets
Route::get('/wallets/list', [WalletsController::class,'selectWallet'])->name('selectWallet');
Route::get('/wallets/byid', [WalletsController::class,'getWalletById'])->name('getWalletById');
Route::post('/wallets/add', [WalletsController::class,'addNewWallet'])->name('addNewWallet');
Route::put('/wallets/update', [WalletsController::class,'updateWallet'])->name('updateWallet');
Route::delete('/wallets/delete', [WalletsController::class,'deleteWallet'])->name('deleteWallet');
//histories
Route::get('/histories/list', [HistoriesController::class,'selectHistory'])->name('selectHistory');
Route::get('/histories/byid', [HistoriesController::class,'getHistoryById'])->name('getHistoryById');
Route::post('/histories/add', [HistoriesController::class,'addNewHistory'])->name('addNewHistory');
Route::delete('/histories/delete', [HistoriesController::class,'deleteHistory'])->name('deleteHistory');