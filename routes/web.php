<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\currentBalance;
use App\Http\Controllers\GetTransactionStatus;
use App\Http\Controllers\ChangeStatus;
use App\Http\Controllers\MoneyTransfer;
use App\Http\Controllers\TransactionList;
use App\Http\Controllers\customerController;
use Illuminate\Http\Request;
use App\Models\eWalletAccount;




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
Route::get('/',function() {
   return view('test');
});


Route::post('/create_customerAccounts',[customerController::class, 'createAccount']);
Route::post('/create_eWalletAccount',[UserController::class, 'createAccount']);

Route::get('/currentBalance/{id}',[currentBalance::class, 'currentBalance']);

Route::get('/GetTransactionStatus/{transactions_id}',[GetTransactionStatus::class, 'GetTransactionStatus']);


Route::post('/transfer',[MoneyTransfer::class,'MoneyTransfer']);
Route::get('/transactionlist/{phoneNumber}',[TransactionList::class, 'transactionlist']);
