<?php

use App\Http\Controllers\GstBillingController;
use App\Http\Controllers\PartyController;
use Illuminate\Support\Facades\Auth;
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

#_____Home Module_____
Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#_____Party Module_____

    // add CLient
    Route::get('/addparty',[PartyController::class,'addclient'])->name('addparty');
    //Manage Party
    Route::get('/manage-party', [PartyController::class,'manageparty'])->name('manage-party');

#_____Invoice Module_____
    
    // Create invoice
    Route::get('/create-invoice', [GstBillingController::class,'createinvoice'])->name('create-invoice');
    // Manage Invoice
    Route::get('/manage-invoice', [GstBillingController::class,'manageinvoice'])->name('manage-invoice');