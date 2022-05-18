<?php
use App\Models\managers;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\managersController;

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
Route::get('/Item/register', [ItemController::class, 'register'])->name('Item/register');
Route::post('/Item/register', [ItemController::class, 'store'])->name('Item/register');


Route::get('/managers/register', [managersController::class, 'register'])->name('managers/register');
Route::post('/managers/register', [managersController::class, 'store'])->name('managers/register');
Route::get('/managers/get_all', [managersController::class, 'get_all'])->name('managers/get_all');
Route::get('/managers/get_by_id/{id}', [managersController::class, 'get_by_id'])->name('managers/get_by_id');


//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/Item/get_all', [ItemController::class, 'get_all'])->name('Item/get_all');
Route::get('/Item/search/{id}', [ItemController::class, 'get_by_id']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
