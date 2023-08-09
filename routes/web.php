<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\editController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ReservationController;
use Illuminate\Database\Capsule\Manager;

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

// Route::get('/', function () {
//     return view('welcome');


// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('header');
})->name('header');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');
//register
Route::get('/register',[RegistrationController::class,"index"])->name('client.inscription');
Route::post('/register',[RegistrationController::class,"register"])->name('store');
//login
Route::get('/login',[loginController::class,"connexion"])->name('client.connexion');
Route::post('/login',[loginController::class,"login"])->name('authentification');

//logout

//manager
Route::get('/add_manager',[ManagerController::class, "add"])->name('ajout');
Route::post('/add_manager',[ManagerController::class, "manage"])->name('manageur');
//reservation
Route::get('/reservation',[ReservationController::class, "reserver"])->name('reservation');
Route::post('/reserverTicket',[ReservationController::class, "reservation"])->name('reserve');

//admin routes
Route::get('/index',[AdminController::class,"AdminVue"])->name('Administrateur');

Route::get('/reservation_liste',[ReservationController::class,"liste"])->name('reserve_liste');

//modifier



Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::resource('manager',editController::class);










/*Route::middleware([ 'auth','role:admin'])->group(function(){
    Route::get('/private', function () {
        return view('Bonjour Admin');
    });

});*/




// require '_DIR_'.'/auth.php';




