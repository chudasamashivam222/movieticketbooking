<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [PagesController::class, 'index']);

Route::get('/booking', [BookingController::class, 'index']);
Route::get('/booking/index', [BookingController::class, 'index']);


Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/search', [\App\Http\Controllers\PostsController::class, 'search']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
//Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/index', [IndexController::class, 'index']);
