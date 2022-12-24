<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
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




Route::middleware('auth')->get('/home', function () {
    return redirect()->route('dashboard');
});

Route::get('/fr', [HomeController::class, 'frIndex'])->name('fr.home');


Route::get('/fr/circuit/lemur', function () {
    return view('fr.circuit.lemur');
})->name('fr.circuit.lemur');
Route::get('/fr/circuit/bemaraha', function () {
    return view('fr.circuit.bemaraha');
})->name('fr.circuit.bemaraha');
Route::get('/en/circuit/lemur', function () {
    return view('en.circuit.lemur');
})->name('en.circuit.lemur');
Route::get('/en/circuit/bemaraha', function () {
    return view('en.circuit.bemaraha');
})->name('en.circuit.bemaraha');


Route::get('/',  function () {
    return view('en.welcome');
})->name('home');

Route::get('/fr/contact', function () {
    return view('fr.contact');
})->name('fr.contact');

Route::get('/en/contact', function () {
    return view('en.contact');
})->name('en.contact');

Route::post('/fr/send-message', [MessageController::class, 'store'])->name('message.store');

Route::middleware('auth')->group(
    function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/admin/contact/update', [ContactController::class, 'update'])->name('contact.update');
        Route::post('/admin/logo/update', [DashboardController::class, 'updateLogo'])->name('logo.update');
        Route::post('/admin/profil/update', [ProfilController::class, 'update'])->name('profil.update');
        Route::post('/admin/password/update', [ProfilController::class, 'updatePassword'])->name('profil.updatePassword');
        Route::post('/admin/reset', [DashboardController::class, 'reset'])->name('reset');

        Route::get('/admin/message/delete/{id}', 'App\Http\Controllers\Admin\MessageController@destroy')->name('message.delete');
    }
);
