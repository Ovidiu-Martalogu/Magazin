<?php
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuestController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\SuggestionsController;
use App\Http\Controllers\ImprovementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DrivetestController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreSuggestionsRequest;

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

Route::view('/', 'Nastris');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

 
Route::get('/counter', Counter::class);

Route::resource("products",productsController::class);
Route::resource("orders",OrdersController::class);
Route::resource("cart",CartController::class);
Route::resource("suggestions",SuggestionsController::class);
Route::resource("produse",productsController::class);
Route::resource("improvement",ImprovementController::class);
Route::resource("drive_test",DrivetestController::class);
Route::resource("Guest",GuestController::class);



Route::GET('/page1', function () {
    return view('auth/page1');
});
Route::get('/Nastris', function () {
    return view('Nastris');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/produse', function () {
    return view('auth/produse');
});
/*
Route::get('/Guest', function () {
    return view('Guest');
});*/
/*
Route::get('cart', [ProductsController::class, 'showCartTable']);
Route::get('cart/{id}', [ProductsController::class, 'addToCart']);
Route::get('cart', 'CartController@index');
Route::get('store', 'StoreController@index');
Route::post('store/add-to-cart', 'StoreController@addToCart');*/








/*


Route::controller(AuthenController::class)->group(function(){
    Route::get('/registration','registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user','registerUser')->name('register-user');
    Route::get('/login','login')->middleware('alreadyLoggedIn');
    Route::post('/login-user','loginUser')->name('login-user');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::get('/logout','logout');
});*/
