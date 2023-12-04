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
		$comentarios = Comment::all();
		return view('pages.games.OnePiece', compact('comentarios'));
	}
	public function showAoAshi(){
		$comentarios = Comment::all();
		return view('pages.games.AoAshi', compact('comentarios'));
	}
}
