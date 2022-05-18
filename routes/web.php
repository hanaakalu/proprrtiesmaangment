
<?php


use App\Models\managers;
use App\Models\storekeeper;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\managersController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\storekeeperController;



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
Route::get('/managers/register', [managersController::class, 'register'])->name('managers/register');
Route::post('/managers/register', [managersController::class, 'store'])->name('managers/register');
Route::get('/storekeeper/register', [storekeeperController::class, 'register'])->name('storekeeper/register');
Route::post('/storekeeper/register', [storekeeperController::class, 'store'])->name('storekeeper/register');
Route::get('/Item/register', [ItemController::class, 'register'])->name('Item/register');
Route::post('/Item/register', [ItemController::class, 'store'])->name('Item/register');
Route::get('/Item/get_all', [ItemController::class, 'get_all'])->name('Item/get_all');
Route::get('/Item/search/{id}', [ItemController::class, 'get_by_id']);

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/managers/list', [managersController::class, 'get_all'])->name('managers/list');
Route::get('/storekeeper/get_all', [storekeeperController::class, 'get_all'])->name('storekeeper/get_all');
Route::get('/managers/edit/{id}', [managersController::class, 'edit']);
Route::post('/managers/update',[managersController::class,'update'])->name('managers/update');
Route::get('/managers/delete/{id}', [managersController::class, 'delete']);
Route::get('/managers/search/{id}', [managersController::class, 'get_by_id']);
Route::get('/storekeeper/search/{id}', [storekeeperController::class, 'get_by_id']);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');