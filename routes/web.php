
<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChauffeurController;
 
 
Route::get('/', [RegisterController::class, 'welcome']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register'); 
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'check'])->name('check');

Route::resource("/reservation", ReservationController::class);
Route::resource("/chauffeur", ChauffeurController::class);
//Route::get('/details', [ReservationController::class, 'detail']);
