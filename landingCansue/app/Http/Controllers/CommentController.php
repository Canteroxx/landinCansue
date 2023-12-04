<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request){
		$contacto = new Comment();
		$contacto->username = $request->post('username');
		$contacto->comment = $request->post('comment');
		$contacto->game = $request->post('game');

		$contacto->save();

        return redirect()->back();
	}
	public function showOnePiece(){
		$comentarios = Comment::where('game', 'OnePiece')->get();
		return view('pages.games.onepiece', compact('comentarios'));
	}
	public function showAoAshi(){
		$comentarios = Comment::where('game', 'AoAshi')->get();
		return view('pages.games.aoashi', compact('comentarios'));
	}
	public function showJujutsuKaisen(){
		$comentarios = Comment::where('game', 'JujutsuKaisen')->get();
		return view('pages.games.JujutsuKaisen', compact('comentarios'));
	}
	public function showSoloLeveling(){
		$comentarios = Comment::where('game', 'SoloLeveling')->get();
		return view('pages.games.SoloLeveling', compact('comentarios'));
	}
	public function showHaikyuuu(){
		$comentarios = Comment::where('game', 'Haikyuuu')->get();
		return view('pages.games.Haikyu', compact('comentarios'));
	}
	public function showFoodWars(){
		$comentarios = Comment::where('game', 'FoodWars')->get();
		return view('pages.games.FoodWars', compact('comentarios'));
	}
	public function showSlime(){
		$comentarios = Comment::where('game', 'Slime')->get();
		return view('pages.games.Slime', compact('comentarios'));
	}
	public function showBlueLock(){
		$comentarios = Comment::where('game', 'BlueLock')->get();
		return view('pages.games.BlueLock', compact('comentarios'));
	}
	public function showTateNoYuusha(){
		$comentarios = Comment::where('game', 'TateNoYuusha')->get();
		return view('pages.games.TateNoYuusha', compact('comentarios'));
	}
	public function showKurokoNoBasquet(){
		$comentarios = Comment::where('game', 'KurokoNoBasquet')->get();
		return view('pages.games.KurokoNoBasquet', compact('comentarios'));
	}
	public function showOverlord(){
		$comentarios = Comment::where('game', 'Overlord')->get();
		return view('pages.games.Overlord', compact('comentarios'));
	}
}
