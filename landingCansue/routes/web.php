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
Route::post('/games/JujutsuKaisen', [CommentController::class, 'comment']);

Route::get('/games/JujutsuKaisen', [CommentController::class, 'showJujutsuKaisen']);

Route::get('/games/SoloLeveling', function () {
    return view('pages.games.sololeveling');
});
Route::post('/games/SoloLeveling', [CommentController::class, 'comment']);

Route::get('/games/SoloLeveling', [CommentController::class, 'showSoloLeveling']);

Route::get('/games/Slime', function () {
    return view('pages.games.slime');
});
Route::post('/games/Slime', [CommentController::class, 'comment']);

Route::get('/games/Slime', [CommentController::class, 'showSlime']);

Route::get('/games/Haikyuuu', function () {
    return view('pages.games.haikyu');
});
Route::post('/games/Haikyuuu', [CommentController::class, 'comment']);

Route::get('/games/Haikyuuu', [CommentController::class, 'showHaikyuuu']);

Route::get('/games/FoodWars', function () {
    return view('pages.games.foodwars');
});
Route::post('/games/FoodWars', [CommentController::class, 'comment']);

Route::get('/games/FoodWars', [CommentController::class, 'showFoodWars']);

Route::get('/games/BlueLock', function () {
    return view('pages.games.BlueLock');
});
Route::post('/games/BlueLock', [CommentController::class, 'comment']);

Route::get('/games/BlueLock', [CommentController::class, 'showBlueLock']);

Route::get('/games/KurokoNoBasquet', function () {
    return view('pages.games.KurokoNoBasquet');
});
Route::post('/games/KurokoNoBasquet', [CommentController::class, 'comment']);

Route::get('/games/KurokoNoBasquet', [CommentController::class, 'showKurokoNoBasquet']);

Route::get('/games/TateNoYuusha', function () {
    return view('pages.games.TateNoYuusha');
});
Route::post('/games/TateNoYuusha', [CommentController::class, 'comment']);

Route::get('/games/TateNoYuusha', [CommentController::class, 'showTateNoYuusha']);

Route::get('/games/Overlord', function () {
    return view('pages.games.Overlord');
});
Route::post('/games/Overlord', [CommentController::class, 'comment']);

Route::get('/games/Overlord', [CommentController::class, 'showOverlord']);
