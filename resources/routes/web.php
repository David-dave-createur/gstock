<?php

use App\Livewire\Rolescomp;
use App\Livewire\Attributioncomp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Utilisateurcomp;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group([
    "middleware" => ["auth"],
    "prefix" => "admin",
    "as" => "admin."


], function () {
   Route::get('/roles',Rolescomp::class)->name('roles');
   Route::get('/attribution',Attributioncomp::class)->name('attribution');
});



Route::group([
    "middleware" => ["auth"],
    "prefix" => "utilisateur",
    "as" => "utilisateur."


], function () {
   Route::get('/ajout_suppression',Utilisateurcomp::class)->name('ajout_suppression');
});