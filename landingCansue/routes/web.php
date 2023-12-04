<?php

use App\Http\Controllers\logoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'show']);

Route::get('/games', function () {
    return view('pages.games');
});
Route::get('/us', function () {
    return view('pages.us');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', [ContactController::class, 'contact'])->name('pages.contact');

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [logoutController::class, 'logout']);

Route::get('/games/OnePiece', function () {
    return view('pages.games.onepiece');
});
Route::post('/games/OnePiece', [CommentController::class, 'comment']);

Route::get('/games/OnePiece', [CommentController::class, 'showOnePiece']);

Route::get('/games/AoAshi', function (){
    return view('pages.games.aoashi');
});
Route::post('/games/AoAshi', [CommentController::class, 'comment']);

Route::get('/games/AoAshi', [CommentController::class, 'showAoAshi']);

Route::get('/games/JujutsuKaisen', function () {
    return view('pages.games.jujutsukaisen');
});
Route::get('/games/SoloLeveling', function () {
    return view('pages.games.sololeveling');
});
Route::get('/games/Slime', function () {
    return view('pages.games.slime');
});
Route::get('/games/Haikyuuu', function () {
    return view('pages.games.haikyu');
});
Route::get('/games/FoodWars', function () {
    return view('pages.games.foodwars');
});


