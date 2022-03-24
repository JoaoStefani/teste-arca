<?php
use App\Http\Controllers\Admin\BusinessController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/business',  [BusinessController::class, 'index'])->middleware(['auth'])->name('businessindex');
Route::post('/business/create',  [BusinessController::class, 'store'])->middleware(['auth'])->name('businessstore');

//Tela de criacao
Route::get('/business/register', function () {
    return view('admin.business.create-business');
})->middleware(['auth'])->name('createbusiness');

require __DIR__.'/auth.php';
